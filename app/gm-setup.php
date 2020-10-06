<?php

$client = new Google_Client();
$client->setApplicationName('Login to LoginApp');
$client->setClientId($config['google']['id']);
$client->setClientSecret($config['google']['secret']);
$client->setScopes($config['google']['scope']);
$client->setRedirectUrl($config['google']['callback_url']);

// instantiate google oauth service
$oauth = new Google_Service_Oauth2($client);


//prepare callback login URL with permission
$googleLoginUrl = $client->createAuthUrl();