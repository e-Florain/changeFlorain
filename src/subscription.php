<?php
include("header.php");
session_start();
if (! isset($_SESSION["email"])) {
    header('Location: login.php');
    exit;
}
include_once('inc/mollie.php');
if (isset($_POST)) {
    if (isset($_POST['amount'])) {
        $infos = get_customer_by_id($_POST['customerId']);
        if ($infos['email'] == $_SESSION['email']) {
            $amount = strval(number_format(floatval($_POST['amount']), 2, '.', ''));
        } else {
            $strmsg = "Vous n'êtes pas autorisé";
            echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
        }
        $infos = update_subscription($_POST['id'], $_POST['customerId'], $amount);
        header('Location: index.php');
    }
}

$subscriptions = get_subscriptions($_SESSION['email']);
$sub = false;
//echo $_GET['id'];
foreach ($subscriptions as $subscription) {
    if ($subscription['id'] == $_GET['id']) {
        $sub = $subscription;
        break;
    }
}
if ($sub == false) {
    $strmsg = " Prélèvement inexistant";
    echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
    header('Location: index.php');
}
/*if ($sub != false) {
    var_dump($subscription);
}*/
//var_dump($subscription);
?>
        <div class="row">
            <div class="col s10 offset-m2 title">
                Votre compte Florain - Prélèvement
            </div>
        </div> 
    <div class="container">   
            <div class="row">
                <form class="col s10 m6 offset-m2" method="post" onSubmit='return checkValuesSub();' action="subscription.php">
                <input type="hidden" id="id" name="id" value="<?php echo $sub['id']; ?>">
                <input type="hidden" id="customerId" name="customerId" value="<?php echo $sub['customerId']; ?>">
                <div class="row">
                    <div class="input-field col s12">
                    <input disabled id="description" name="description" type="text" class="validate" value="<?php echo $sub['description']; ?>" required>
                    <label for="description">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="amount" name="amount" type="text" class="validate" value="<?php echo $sub['amount']['value']; ?>" required>
                    <label for="amount">Montant</label>
                    <span name="amounthelper" id="amounthelper" class="helper-text"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="interval" name="interval" type="text" class="validate" value="<?php if ($sub['interval']=="1 month") { echo "Mensuelle"; } if ($sub['interval']=="365 days") { echo "Annuelle"; } ?>" disabled required>
                    <label for="interval">Fréquence</label>
                    </div>
                </div>
                <button type="submit" id="form_step1" name="form_step1" class="btn-primary btn" data-bcup-haslogintext="no">Valider</button>
                </form>
            </div>
    </div>
<?php
include("footer.php");
?>