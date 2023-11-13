<?php
include("header.php");
session_start();
if (! isset($_SESSION["email"])) {
    header('Location: login.php');
    exit;
}
include_once('inc/mollie.php');
include_once('inc/tools.php');
$subscriptions = get_subscriptions($_SESSION['email']);
$adhs = getAdh($_SESSION['email']);
$assos = getOdooAssos();
$customer = get_customer($_SESSION['email']);
//var_dump($customer);
$mandates = list_mandates($customer[0]['id'])['_embedded']['mandates'];
$mandateusr = array();
foreach ($mandates as $mandate) {
    if ($mandate['status'] == 'valid') {
        $mandateusr['iban'] = $mandate['details']['consumerAccount'];
        $mandateusr['signatureDate'] = $mandate['signatureDate'];
        $mandateusr['id'] = $mandate['id'];
    }
}
?>
    <div class="row">
        <div class="col s10 offset-m2 title">
            Bienvenu.e <?php echo $_SESSION["name"]; ?>
        </div>
    </div>
    <div class="row">
        <div class="col s10 offset-m2 title">
            Obtenir des florains (par CB)
        </div>
    </div>
    <div class="row">
    <?php
    if (!isset($_GET["step"])) {
    ?>
        <form class="col s10 m6 offset-m2" method="post" action="?step=etape2">
        <div class="row">
            <div class="input-field col s12">
                <select id="amount" name="amount" class="validate" required>
                    <option value="" disabled selected>Choisisser votre montant</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="500">500</option>
                    <option value="1000">1000</option>
                </select>
                <label>Montant</label>
            </div>
        </div>
        <button type="submit" id="form_step1" name="form_step1" class="btn-primary btn" data-bcup-haslogintext="no">Valider</button>
        </form>
    <?php
    } else {
        if ($_GET["step"]=="etape2") {
            echo '<div class="col s10 offset-s2">';
            $numberAsString = number_format($_POST['amount'], 2);
            $order_id = bin2hex(random_bytes(40));
            $customers = get_customer($_SESSION['email']);
            if (count($customers) > 0) {
                $res = create_payment($numberAsString, "Change CB ".$_SESSION["email"], $order_id, $customers[0]["id"]);
            } else {
                $res = create_customer($_SESSION["email"], $adhs[0]["lastname"].$adhs[0]["firstname"]);
            }
            //var_dump($res);
            if (is_numeric($res["status"])) {
                $strmsg = "Erreur ".strval($res["status"]);
                echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
            } else {
                if (($res["status"] == "valid") or ($res["status"] == "open")) {
                    $url = $res["_links"]["checkout"]["href"];
                    header("location: ".$url);
                } else {
                    //var_dump($res);
                    //header("location: creditercompte.php");
                }
            }
        } elseif ($_GET["step"]=="etape3") {
            if (isset($_GET["order_id"])) {
                include_once("inc/mollie.php");
                if (get_status_payment($_GET["order_id"]) == "paid") {
                    echo '<div class="row"><div class="col s10 offset-s2">';
                    echo "<h4>Merci votre compte Florain numérique sera crédité sous les 24h (jours ouvrables)</h4>";
                    echo '</div>';
                    postCallbackUrl();
                } else {
                    echo '<div class="row"><div class="col s10 offset-s2">';
                    echo "<h4>Désolé le paiement a échoué, merci de réessayer plus tard</h4>";
                    echo '</div>';
                }
            }
        }
    }
    ?>
    </div>
    <br/>
        <div class="row">
            <div class="col s10 m6 offset-m2 title">
                Modifier le change mensuel (par prélèvement)
            </div>
        </div> 
    <div class="row">   
        <table class="col s10 m6 offset-m2">
            <!--<th>Id</th>-->
            <th>Description</th>
            <th>Montant</th>
            <th>Type</th>
            <th>Prochain prélèvement</th>
            <?php
                foreach($subscriptions as $subscription) {
                    if ($subscription['status'] == 'active') {
                        if (preg_match('/Change/', $subscription['description'])) {
                            echo "<tr>";
                            //secho "<td>".$subscription['id']."</td>";
                            
                            echo "<td><a href='subscription.php?id=".$subscription['id']."'>".$subscription['description']."</a></td>";
                            echo "<td>".$subscription['amount']['value']."</td>";
                            echo "<td>";
                            if (preg_match("/(\d+)\s+(\w+)/", $subscription['interval'],$matches)) {
                                echo $matches[1];
                                if ($matches[2] == "days") {
                                    echo " jours";
                                } elseif ($matches[2] == "month") {
                                    echo " mois";
                                }
                            }
                            echo "</td>";
                            echo "<td>";
                            $datetime = new DateTime();
                            $newDate = $datetime->createFromFormat('Y-m-d', $subscription['nextPaymentDate']);
                            echo $newDate->format('d-m-Y');;
                            echo "</td>";
                            echo "<tr>";
                        }
                    }
                }
            ?>
        </table>
    </div>
    <br/>
    <div class="row">
        <div class="col s10 m6 offset-m2 title">
            Association soutenue
        </div>
    </div> 
    <div class="row">
        <?php
        //echo $adh[0]['orga_choice'];
        foreach ($assos as $asso) {
            if ($asso['id'] == $adhs[0]['orga_choice']) {
                $name = $asso['name'];
            }
        }
        ?>
        <table class="col s10 m6 offset-m2">
            <th>Nom</th>
            <!--<th>Change cumulé sur l'année civile</th>
            <th>Prévision du 1% donné</th>-->
            <tr>
                <td><?php echo $name; ?></td>
                <!--td><?php //echo $name; ?></td>
                <td><?php //echo $name; ?></td>-->
            </tr>
        </table>
    </div>
<!----------------------------------------------------------------------------->
    <br/>
    <div class="row">
        <div class="col s10 m6 offset-m2 title">
            Modifier les coordonnées bancaires
        </div>
    </div> 
    <div class="row">
        <?php
        //echo $adh[0]['orga_choice'];
        foreach ($assos as $asso) {
            if ($asso['id'] == $adhs[0]['orga_choice']) {
                $name = $asso['name'];
            }
        }
        ?>
        <table class="col s10 m6 offset-m2">
            <th>IBAN</th><th>Date de création</th>
            <tr>
                <td><?php echo $mandateusr['iban']."<a href='mandate.php?id=".$mandateusr['id']."'>";?><i class="material-icons">edit</i></a></td>
                <td><?php echo $mandateusr['signatureDate']; ?></td>
            </tr>
        </table>
    </div>
<?php
include("footer.php");
?>
