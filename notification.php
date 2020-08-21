<?php

    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

    $entityBody = file_get_contents('php://input');
    
    if(!isset($entityBody)){
        $fichero = './webhook.json';

        $actual = file_get_contents($fichero);
    
        $actual .= $entityBody;
    
        file_put_contents($fichero, $actual);
    } else{
        header('Location: https://federledesma-mp-ecommerce-php.herokuapp.com/');
    }
?>