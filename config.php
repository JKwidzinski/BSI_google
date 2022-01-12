<?php

require_once 'vendor/autoload.php';
 
$google_client = new Google_Client();
 
$google_client->setClientId('621509953395-f3d9n9baa1sln8sr9dg7c2j5bu1o5k14.apps.googleusercontent.com');
 
$google_client->setClientSecret('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');
 
$google_client->setRedirectUri('http://localhost/BSI_google/index.php');
 
$google_client->addScope('email');
 
$google_client->addScope('profile');

session_start();
 
?>