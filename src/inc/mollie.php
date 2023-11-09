<?php

function get_customers() {
    include("config.php");
    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    $url = $infosmollie['url']."/customers";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function get_customer($email) {
    include("config.php");
    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    $url = $infosmollie['url']."/customers?limit=250";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    $results = array();
    foreach ($infos['_embedded']['customers'] as $info) {
        if ($info['email'] == $email) {
            $results[] = $info;
        }
    }
    return $results;
}

function get_customer_by_id($id) {
    include("config.php");
    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    $url = $infosmollie['url']."/customers/".$id;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));
    
    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function create_customer($email, $name) {
    include("config.php");
    $ch = curl_init();
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
    $url = $infosmollie['url']."/customers";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $datas = array(
        "email" => $email,
        "name" => $name
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key']
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function create_payment($amountvalue, $description, $order_id, $customer) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/payments";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $amount = array(
        "currency" => "EUR",
        "value" => $amountvalue
    );
    $method = array(
        "creditcard"
    );
    $datas = array(
        "amount" => $amount,
        "redirectUrl" => "https://moncompte.florain.fr/src/index.php?step=etape3&order_id=".$order_id,
        "method" => $method,
        "metadata" => array(
            "order_id" => $order_id
        ),
        "customerId" => $customer,
        "description" => $description
    );
    $json = json_encode($datas);
    //echo $json;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    //var_dump($infos);
    return $infos;
}

function create_mandate($customer, $iban, $name) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/mandates";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $datas = array(
        "method" => "directdebit",
        "consumerAccount" => $iban,
        "consumerName" => $name
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key']
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function list_mandates($customer) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/mandates";;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));
    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function get_subscription($customer, $subscription) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/subscriptions/".$subscription;;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function get_subscriptions($email) {
    $customers = get_customer($email);
    $results = array();
    foreach ($customers as $customer) {
        $subscriptions = list_subscriptions($customer['id'])['_embedded']['subscriptions'];
        foreach ($subscriptions as $subscription) {
            $results[] = $subscription;
        }
    }
    return $results;
}

function has_change_florain($email) {
    $subscriptions = get_subscriptions($email);
    foreach ($subscriptions as $subscription) {
        if ($subscription['description'] == "Change Florain") {
            if (($subscription['status'] == "active") or ($subscription['status'] == "pending")) {
                return True;
            }
        }
    }
    return False;
}

function has_adh_florain($email) {
    $subscriptions = get_subscriptions($email);
    foreach ($subscriptions as $subscription) {
        if ($subscription['description'] == "Adhésion Florain Annuelle") {
            if (($subscription['status'] == "active") or ($subscription['status'] == "pending")) {
                return True;
            }
        }
        if ($subscription['description'] == "Adhésion Florain Mensuelle") {
            if (($subscription['status'] == "active") or ($subscription['status'] == "pending")) {
                return True;
            }
        }
    }
    return False;
}

function list_subscriptions($customer) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/subscriptions";;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function cancel_subscription($customer, $subscription) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/subscriptions/".$subscription;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function revoke_mandate($customer, $mandat) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/mandates/".$mandat;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key']
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function list_payments() {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/payments";;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function get_payment($order_id) {
    $payments = list_payments();
    foreach ($payments["_embedded"]["payments"] as $payment) {
        if (isset($payment["metadata"])) {
            if (isset($payment["metadata"]["order_id"])) {
                if ($payment["metadata"]["order_id"] == $order_id) {
                    return $payment;
                }
            }
        }
    }
    return false;
}

function get_status_payment($order_id) {
    $payment = get_payment($order_id);
    //var_dump($payment);
    return $payment["status"];
}

function create_subscription_monthly($amountvalue, $customer, $mandate, $description) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/subscriptions";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $amount = array(
        "currency" => "EUR",
        "value" => $amountvalue
    );
    $datas = array(
        "amount" => $amount,
        "interval" => "1 month",
        "mandateId" => $mandate,
        "webhookUrl" => "https://helloasso.florain.fr",
        "description" => $description

    );
    //var_dump($datas);
    $json = json_encode($datas);
    //echo $json;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

function create_subscription_annually($amountvalue, $customer, $mandate, $description) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/subscriptions";

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $amount = array(
        "currency" => "EUR",
        "value" => $amountvalue
    );
    $datas = array(
        "amount" => $amount,
        "interval" => "365 days",
        "mandateId" => $mandate,
        "webhookUrl" => "https://helloasso.florain.fr",
        "description" => $description

    );
    //var_dump($datas);
    $json = json_encode($datas);
    //echo $json;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}

//function update_subscription($subscription, $customer, $amountvalue, $datestr) {
function update_subscription($subscription, $customer, $amountvalue) {
    include("config.php");
    $ch = curl_init();
    $url = $infosmollie['url']."/customers/".$customer."/subscriptions/".$subscription;

    curl_setopt($ch, CURLOPT_URL,  $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    $amount = array(
        "currency" => "EUR",
        "value" => $amountvalue
    );
    $datas = array(
        "amount" => $amount
        //"startDate" => $datestr
    );
    //var_dump($datas);
    $json = json_encode($datas);
    //echo $json;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$infosmollie['key'],
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    $infos = json_decode($response, true);
    return $infos;
}
?>