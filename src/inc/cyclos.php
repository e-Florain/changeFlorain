<?php
function getAuth($login, $password) 
{
    include("config.php");
    $ch = curl_init();
    try {
        $url = $infoscyclos['url']."/auth";

        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic '. base64_encode($login.':'.$password),
        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $res = json_decode($response, true);
        if ($res == NULL) {
            return -2;
        }
        if (isset($res["code"])) {
            if ($res["code"] == "login") {
                return -1;
            }
        } else {
            return $res;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}


?>
