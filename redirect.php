<?php

if (!defined('ABSPATH')) {
    header("Location: /404", true, 301);
}



$redirects = [
    'jasa-pp'  => '/jual-beli-saldo-paypal',
    'jasa-web' => '/jasa-web',
    'jasa-ads' => '/jasa-iklan',
];

$urlRedirect = $_GET['urlRedirect'] ?? '';

$urlRedirectFinal = $redirects[$urlRedirect];
if (!isset($urlRedirectFinal)) {

    header("Location: /404", true, 301);
}
