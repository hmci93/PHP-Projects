<?php
include_once 'g_config.php';
session_start();

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	
	//It will Attempt to exchange a code for an valid authentication token.
	$token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
	
	//This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code
	if(!isset($token['error'])) {
	    //Set the access token used for requests
	    $google_client->setAccessToken($token['access_token']);
	    
	    //Store "access_token" value in $_SESSION variable for future use.
	    $_SESSION['google_access_token'] = $token['access_token'];
	    
	    //Create Object of Google Service OAuth 2 class
	    $google_service = new Google_Service_Oauth2($google_client);
	    
	    //Get user profile data from google
	    $data = $google_service->userinfo->get();
	    
	    $_SESSION['g_user_first_name'] = '';
	    $_SESSION['g_user_last_name'] = '';
	    $_SESSION['g_user_email_address'] = '';
	    $_SESSION['g_user_image'] = '';
	    
	    //Below you can find Get profile data and store into $_SESSION variable
	    if(!empty($data['given_name'])) {
	        $_SESSION['g_user_first_name'] = $data['given_name'];
	    }
	    if(!empty($data['family_name']))
        {
            $_SESSION['g_user_last_name'] = $data['family_name'];
        }
        if(!empty($data['email'])) {
            $_SESSION['g_user_email_address'] = $data['email'];
        }
        // if(!empty($data['gender'])) {
        //     $_SESSION['g_user_gender'] = $data['gender'];
        // }
        if(!empty($data['picture'])) {
            $_SESSION['g_user_image'] = $data['picture'];
        }
        
        //Redirect to Customer Version
        header("Location: http://tipteapi.com/customer/");
	}
}
?>