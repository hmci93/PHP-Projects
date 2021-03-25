<?php
session_start();
include_once 'f_config.php';

$facebook_helper = $facebook->getRedirectLoginHelper();

if (isset($_GET['code'])) {
    
    $access_token = $facebook_helper->getAccessToken();
    
    $_SESSION['facebook_access_token'] = $access_token;
    
    $facebook->setDefaultAccessToken($_SESSION['facebook_access_token']);
    
    $_SESSION['f_user_name'] = '';
    $_SESSION['f_user_email_address'] = '';
    $_SESSION['f_user_image'] = '';
    
    $graph_response = $facebook->get("/me?fields=name,email", $access_token);
    
    $facebook_user_info = $graph_response->getGraphUser();
    
    if (!empty($facebook_user_info['id'])) {
        $_SESSION['f_user_image'] = 'https://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
    }
    if (!empty($facebook_user_info['name'])) {
        $_SESSION['f_user_name'] = $facebook_user_info['name'];
    }
    if (!empty($facebook_user_info['email'])) {
        $_SESSION['f_user_email_address'] = $facebook_user_info['email'];
    }
    
    // echo $_SESSION['f_user_name']."<br>".$_SESSION['f_user_email_address']."<br>".$_SESSION['f_user_image'];
    
    //Redirect to Customer Version
    header("Location: http://tipteapi.com/customer/");
}
?>