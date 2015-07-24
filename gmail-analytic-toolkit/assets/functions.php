<?php
require_once 'autoload.php';
login_check();

function get_email_info(){
        
}

function login_check()
{
    $client = new Google_Client();
    $client->setAuthConfigFile('client_secret.json');
    $client->addScope('https://www.googleapis.com/auth/gmail.readonly');
    
    if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
        if ($client->isAccessTokenExpired()){
            echo $_SESSION['refresh_token'];
            $client->refreshToken($_SESSION['refresh_token']);
            $_SESSION['access_token'] = $client->getAccessToken();
        }
        try{
            //$client->setAccessToken($_SESSION['access_token']);
            $gmail_service = new Google_Service_Gmail($client);
        } catch (Exception $ex) {
               echo $ex;
               return;
        }
        $user = 'me';
        $results = $gmail_service->users_labels->listUsersLabels($user);
        echo("derp");
        print "Labels:\n";
        foreach ($results->getLabels()as $label){
            echo($label->getName());
        }
        return;
        
        
    }
}


