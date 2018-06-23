<?php

   require_once "config.php";
   
   try{
       $accessToken = $helper->getAccessToken();
   } catch(\Facebook\Exceptions\FacebookResponseException $e){
        echo "Response Exception" . $e->getMessage();
        exit();
   } catch(\Facebook\Exceptions\FacebookSDKException $e){
        echo "SDK Exception" . $e->getMessage();
        exit();
   }

   // check for invalid fb accessToen 
   if(!$accessToken){
       header('Location: index.php');
       exit();
   }

   // get longLived accessToken
//    $oAuth2Client = $FB->get0Auth2Client();
//    if(!$accessToken->isLongLived())
//         $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

    // $response = $FB->get(endpoint: "/me?fields=id,first_name,last_name,email");
    // $userData = $response->getGraphNode()->asArray();
    // $_SESSION['userData'] = $userData;
    // $_SESSION['access_token'] = (string) $accessToken;

    //redirect valid user to userHomepage
    header('Location: rssfeed.php');
    exit();
?>