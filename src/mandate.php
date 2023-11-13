<?php
include("header.php");
session_start();
if (! isset($_SESSION["email"])) {
    header('Location: login.php');
    exit;
}
include_once('inc/mollie.php');
include_once('inc/tools.php');

$customer = get_customer($_SESSION['email']);
$subscriptions = get_subscriptions($_SESSION['email']);
$cust = $customer[0];
$mandates = list_mandates($cust['id'])['_embedded']['mandates'];
$mandateusr = array();
foreach ($mandates as $mandate) {
    if ($mandate['status'] == 'valid') {
        $mandateusr['iban'] = $mandate['details']['consumerAccount'];
        $mandateusr['signatureDate'] = $mandate['signatureDate'];
        $mandateusr['id'] = $mandate['id'];
    }
}
$subs_to_create = array();
$sub = array();
foreach ($subscriptions as $subscription) {
    if ($subscription['status'] == 'active') {
        if (preg_match('/Change/', $subscription['description'])) {
            $sub['description'] = $subscription['description'];
            $sub['amount'] = $subscription['amount']['value'];
            $sub['interval'] = $subscription['interval'];
            $sub['startDate'] = $subscription['nextPaymentDate'];
            $subs_to_create[] = $sub;
        }
        if (preg_match('/Adhésion/', $subscription['description'])) {
            $sub['description'] = $subscription['description'];
            $sub['amount'] = $subscription['amount']['value'];
            $sub['interval'] = $subscription['interval'];
            $sub['startDate'] = $subscription['nextPaymentDate'];
            $subs_to_create[] = $sub;
        }
    }
}

if (isset($_POST)) {
    if (isset($_POST['iban'])) {
        $infos = get_customer_by_id($_POST['customerId']);
        if ($infos['email'] == $_SESSION['email']) {
            $infos = create_mandate($cust['id'], $_POST['iban'], $cust['name']);
            //var_dump($infos);
            $mandate = $infos['id'];
            if (isset($infos['id'])) {
                if (isset($mandateusr['id'])) {
                    revoke_mandate($cust['id'], $mandateusr['id']);
                }
                foreach ($subs_to_create as $sub) {
                    //var_dump($sub);
                    //echo $sub['amount']." ".$cust['id']." ".$mandate." ".$sub['description']." ".$sub['interval']." ".$sub['startDate'];
                    $res = create_subscription($sub['amount'], $cust['id'], $mandate, $sub['description'], $sub['interval'], $sub['startDate']);
                    //var_dump($res);
                }
                header('Location: index.php');
            } else {
                if ($infos['status'] == 422) {
                    $strmsg = $infos['detail'];
                    if ($infos['detail'] == "The bank account is invalid") {
                        $strmsg = "Le compte bancaire est invalide";
                    }
                    echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
                }
            }
        } else {
            $strmsg = "Vous n'êtes pas autorisé";
            echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
        }
        
        
    }
}

?>
        <div class="row">
            <div class="col s10 offset-m2 title">
                Votre compte Florain - Mandat
            </div>
        </div> 
    <div class="container">   
            <div class="row">
                <form class="col s10 m6 offset-m2" method="post" onSubmit='return checkIBAN();' action="mandate.php?id=<?php echo $_GET['id']; ?>">
                <input type="hidden" id="customerId" name="customerId" value="<?php echo $cust['id']; ?>">
                <div class="row">
                    <div class="input-field col s12">
                    <input id="iban" name="iban" type="text" class="validate" value="<?php echo $mandateusr['iban']; ?>" required>
                    <label for="iban">IBAN</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input disabled id="signatureDate" name="signatureDate" type="text" class="validate" value="<?php echo $mandateusr['signatureDate']; ?>" >
                    <label for="signatureDate">Date de création</label>
                    <span name="amounthelper" id="amounthelper" class="helper-text"></span>
                    </div>
                </div>
                <button type="submit" id="form_step1" name="form_step1" class="btn-primary btn" data-bcup-haslogintext="no">Valider</button>
                <a href="../" class="btn-primary btn">Annuler</a>
                </form>
            </div>
    </div>
<?php
include("footer.php");
?>