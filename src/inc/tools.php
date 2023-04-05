<?php
function updateAdh($datas) {
    include("config.php");
    $ch = curl_init();
    try {
        $url = $infoflorapi['url'].'/putAdhs';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'x-api-key: '.$infoflorapi['key'],
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $json = json_encode($datas);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200) or $http_code == intval(201)){
            $arr = json_decode($response, true);
            return $arr;
        }
        else{
            return -1;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}

function getAdh($email) {
    include("config.php");
    $ch = curl_init();
    try {
        $url = $infoflorapi['url'].'/getAdhs?email='.urlencode($email);
        curl_setopt($ch, CURLOPT_URL, $url);
        $header = array('x-api-key: '.$infoflorapi['key']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200) or $http_code == intval(201)){
            $arr = json_decode($response, true);
            return $arr;
        }
        else{
            echo "ERROR ".$http_code;
            return -1;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}

function getOdooAssos() {
    include("config.php");
    $ch = curl_init();
    try {
        $url = $infoflorapi['url'].'/getAssos';
        curl_setopt($ch, CURLOPT_URL, $url);
        $header = array('x-api-key: '.$infoflorapi['key']);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200) or $http_code == intval(201)){
            $arr = json_decode($response, true);
            return $arr;
        }
        else{
            return -1;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}
?>