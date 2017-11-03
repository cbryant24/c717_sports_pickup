<?php

  $fb = new Facebook\Facebook([//create a new facebook object
    'app_id' => FACEBOOK_APP_ID, //Replace {app-id} with your app id
    'app_secret' => FACEBOOK_SECRET,
    'default_graph_version' => FACEBOOK_GRAPH_VERSION,
    ]);

  $helper = $fb->getRedirectLoginHelper();//make a redirect helper handler

  $permissions = ['email'];
<<<<<<< HEAD
  $loginUrl = $helper->getLoginUrl('http://sporttrace.com/facebook-login/fb-callback.php', $permissions); //generate the login url

  if(isset($_SESSION['fb_access_token'])){ 
    $output['status'] = true;
    $output['data'] = '<a class="mx-3" href="http://sporttrace.com/facebook-login/logout.php">Logout</a>';   
  } else {
    $output['status'] = false;
    $output['data'] = stripslashes('<a class="mx-3" href="' . $loginUrl . '">Log in with Facebook!</a>');  
=======
  $loginUrl = $helper->getLoginUrl('http://tittyking.com/sportsfinder/facebook-login/fb-callback.php', $permissions); //generate the login url

  if(isset($_SESSION['fb_access_token'])){  	
  	echo '<a class="nav-link" href="facebook-login/logout.php">Logout</a>';		
  } else {
  	echo '<a class="nav-link" href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';	
>>>>>>> 9a897b483992d637e508298a059b2d965aebd217
  }
  
  

?>