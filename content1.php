<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-type: text/plain');

session_start();

if(isset($_GET['action']) && $_GET['action'] == 'end') {
    $_SESSION = array();
    session_destroy();
    $filepath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filepath = implode('/', $filepath);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
    header(("location: {$redirect}/logout.html"), true);
}

if(session_status() == PHP_SESSION_ACTIVE){
    if(!isset($_POST['username'])){
        echo "Please Login";
    }
    elseif ($_POST['username'] == null || strlen($_POST['username']) == 0) {
        echo "A username must be entered. Click here to return to the login screen.";
    }
    else{
        echo "Welcome " . $_POST['username'];
    }
}

?>