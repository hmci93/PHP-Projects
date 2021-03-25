<?php

include_once 'google-api-php-client/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

// Set the OAuth 2.0 Client Id
// define('G_CLIENT_ID', '863382441508-9833tjq9o90cr8b18f6olt080t42rvn2.apps.googleusercontent.com');
$google_client->setClientId('863382441508-9833tjq9o90cr8b18f6olt080t42rvn2.apps.googleusercontent.com');

// Set the OAuth 2.0 Client Secret key
// define('G_CLIENT_SECRET', 'VS6KhwjFOap-bcrAZoHturKq');
$google_client->setClientSecret('VS6KhwjFOap-bcrAZoHturKq');

// //Set the OAuth 2.0 Redirect URI
// define('G_CLIENT_REDIRECT_URL', 'http://tipteapi.com/gRedirect.php');
$google_client->setRedirectUri('http://tipteapi.com/gRedirect.php');

$google_client->addScope('email');

$google_client->addScope('profile');
?>