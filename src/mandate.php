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
$cust = $customer[1];
$mandates = list_mandates($cust['id'])['_embedded']['mandates'];
$mandateusr = array();
foreach ($mandates as $mandate) {
    if ($mandate['status'] == 'valid') {
        $mandateusr['iban'] = $mandate['details']['consumerAccount'];
        $mandateusr['signatureDate'] = $mandate['signatureDate'];
        $mandateusr['id'] = $mandate['id'];
    }
}
if (isset($_POST)) {
    if (isset($_POST['iban'])) {
        $infos = get_customer_by_id($_POST['customerId']);
        if ($infos['email'] == $_SESSION['email']) {
            create_mandate($cust['id'], $_POST['iban'], $cust['name']);
            if (isset($mandateusr['id'])) {
                revoke_mandate($cust['id'], $mandateusr['id']);
            }
            header('Location: index.php');
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