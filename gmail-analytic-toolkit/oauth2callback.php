<?php
/*
 * oauth2callback.php is designed to get an authorization code from the google sign in service
 * by sending the user to the Authroization URL from google containing the sign in service.
 * 
 * A GET request retrieves the authorization code from which the client extracts an access token; and stores 
 * said token in a session variable
 */

require_once 'autoload.php';



$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/gmail-analytic-toolkit/oauth2callback.php');
$client->addScope('https://www.googleapis.com/auth/gmail.readonly');

if (! isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $_SESSION['refresh_token'] = $client->getRefreshToken();
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/gmail-analytic-toolkit/home.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

