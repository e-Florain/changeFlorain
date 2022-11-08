<?php
include("header.php");
session_destroy();
session_start();

if (isset($_POST['email']) and isset($_POST['password'])) {
    require_once 'inc/configureCyclos.php';
    $loginService = new Cyclos\LoginService();
    Cyclos\Configuration::setChannel("webServices");
    $params = new stdclass();
    $params->user = array("principal" => $_POST['email']);
    $params->password = $_POST['password'];
    $params->remoteAddress = $_SERVER['REMOTE_ADDR'];
    if (isset($_POST['email'])) {
        try {
            $result = $loginService->loginUser($params);
            //$result = $loginService->login();
        } catch (Cyclos\ConnectionException $e) {
            $strmsg = "Serveur cyclos injoignable";
            echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
            //die();
        } catch (Cyclos\ServiceException $e) {
            //var_dump($e->errorCode);
            switch ($e->errorCode) {
                case 'VALIDATION':
                    //echo("Missing username / password");
                    $strmsg = "Email ou mot de passe manquant";
                    echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
                    break;
                case 'LOGIN':
                    //echo("Invalid username / password");
                    $strmsg = "Email ou mot de passe invalide";
                    echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
                    break;
                case 'REMOTE_ADDRESS_BLOCKED':
                    $strmsg = "Votre accès est bloqué pour trop de tentatives échouées";
                    echo '<div class="message error" onclick="this.classList.add(\'hidden\');">'.$strmsg.'</div>';
                    //echo("Your access is blocked by exceeding invalid login attempts");
                    break;
                case 'INACCESSIBLE_PRINCIPAL':
                    $_SESSION['email'] = $_POST['email'];
                    header('Location: index.php');
                default:
                    echo("Error while performing login: {$e->errorCode}");
                    break;
            }
            //die();
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