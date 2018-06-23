<?php
    session_start();

    // get a login url from facebook
    require_once "Facebook/autoload.php";

    // create a new FB instance service
    $FB = new \Facebook\Facebook([
        'app_id' => '195487091259463',
        'app_secret' => '6ed9da840c21bda3e5f02f8a992de5de',
        'default_graph_version' => 'v2.12'
    ]);

    // create helper instance for fb login
    $helper = $FB->getRedirectLoginHelper();
?>