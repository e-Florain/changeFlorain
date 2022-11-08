<?php

function load($c) {
    if (strpos($c, "Cyclos\\") >= 0) {
        include str_replace("\\", "/", $c) . ".php";
    }    
}

spl_autoload_register('load'); 

require_once('config.php');
Cyclos\Configuration::setRootUrl($infoscyclos['url']);
Cyclos\Configuration::setAuthentication($infoscyclos['login'], $infoscyclos['password']);
Cyclos\Configuration::getRootUrl();
//var_dump($chan);
?>