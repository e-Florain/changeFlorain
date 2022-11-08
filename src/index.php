<?php
include("header.php");
session_start();
if (! isset($_SESSION["email"])) {
    header('Location: login.php');
    exit;
}
include_once('inc/mollie.php');
$subscriptions = get_subscriptions($_SESSION['email']);
//var_dump($subscriptions);
?>
        <div class="row">
            <div class="col s10 offset-m2 title">
                Votre compte Florain - Prélèvements
            </div>
        </div> 
    <div class="container">   
        <table>
            <!--<th>Id</th>-->
            <th>Description</th>
            <th>Montant</th>
            <th>Type</th>
            <th>Prochain prélèvement</th>
            <?php
                foreach($subscriptions as $subscription) {
                    if ($subscription['status'] == 'active') {
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
            ?>
        </table>
    </div>
<?php
include("footer.php");
?>