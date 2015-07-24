<?php
require_once 'autoload.php';

session_start();
/*
$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->addScope('https://www.googleapis.com/auth/gmail.readonly');
*/
/*
 * 
 * trying to be a better commenter.
 * 
 * this script is called upon the login page's form submit.
 * it checks for an active session, and send the user to oauth2callback if there is no current session
 */
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/gmail-analytic-toolkit/home.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/gmail-analytic-toolkit/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}




