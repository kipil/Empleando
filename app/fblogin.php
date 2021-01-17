<?php 
    session_start();
    $fb = new Facebook\Facebook([
      'app_id' => '{ 250390759665058}', // Replace {app-id} with your app id
      'app_secret' => '{app-secret}',
      'default_graph_version' => 'v3.2',
      ]);
    
    $helper = $fb->getRedirectLoginHelper();
    
    $permissions = ['email']; // Optional permissions
    $callbackUrl = htmlspecialchars('https:localhost/web/login.php');
    $loginUrl = $helper->getLoginUrl($callbackUrl, $permissions);
    
    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';


?>