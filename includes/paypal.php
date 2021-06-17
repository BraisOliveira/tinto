<?php 

//url aquispe
define('URL_SITIO', 'http://localhost/tinto/');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        '',     // ClientID
        ''      // ClientSecret
    )
);

