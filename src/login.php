<?php
include("header.php");
session_destroy();
session_start();

if (isset($_POST['email']) and isset($_POST['password'])) {
    include_once('inc/cyclos.php');
    
    /*$internalAuthService = new Cyclos\InternalAuthService();
    Cyclos\Configuration::setChannel("webServices");
    $params = new stdclass();
    $params->user = array("principal" => $_POST['email']);
    $params->password = $_POST['password'];
    $params->remoteAddress = $_SERVER['REMOTE_ADDR'];
    //$result = $internalAuthService->getCurrentAuth();
    //var_dump($result);*/
    if (isset($_POST['email'])) {
        $result = getAuth($_POST['email'], $_POST['password']);
        if ($result == -1) {
            $strmsg = "Email ou mot de passe invalide";
            echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
        } else {
            $_SESSION["name"] = $result["user"]["display"];
            $_SESSION['email'] = $_POST['email'];
            header('Location: index.php');
        }
    }
}
?>
        <div class="row">
            <div class="col s10 offset-m2 title">
                VOTRE COMPTE FLORAIN
            </div>    
        </div>    

            <div class="row">
                <form class="col s10 m6 offset-m2" method="post" action="login.php">
                <div class="row">
                    <div class="input-field col s12">
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Mot de passe</label>
                    </div>
                </div>
                <button type="submit" id="form_step1" name="form_step1" class="btn-primary btn" data-bcup-haslogintext="no">S'identifier</button>
                </form>
            </div>
<?php
include("footer.php");
?>