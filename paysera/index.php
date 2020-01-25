<?php

require_once('WebToPay.php');

function get_self_url() {
    $s = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0,
                strpos($_SERVER['SERVER_PROTOCOL'], '/'));

    if (!empty($_SERVER["HTTPS"])) {
        $s .= ($_SERVER["HTTPS"] == "on") ? "s" : "";
    }

    $s .= '://'.$_SERVER['HTTP_HOST'];

    if (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80') {
        $s .= ':'.$_SERVER['SERVER_PORT'];
    }

    $s .= dirname($_SERVER['SCRIPT_NAME']);

    return $s;
}

try {
    $self_url = get_self_url();

    $request = WebToPay::redirectToPayment(array(
        'projectid'     => 161878,
        'sign_password' => '05d0a348b55f087fd24e61004a977853',
        'orderid'       => 'Vezuvijaus 12',
        'amount'        => 1000,
        'currency'      => 'EUR',
        'country'       => 'LT',
        'accepturl'     => $self_url.'/accept.php',
        'cancelurl'     => $self_url.'/cancel.php',
        'callbackurl'   => $self_url.'/callback.php',
        'test'          => 1,
    ));
} catch (WebToPayException $e) {
    // handle exception
} 