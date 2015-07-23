<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-type: text/plain');

session_start();

if(isset($_POST['action']) && $_POST['action'] == 'end') {
    $_SESSION = array();
    session_destroy();
    $filepath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filepath = implode('/', $filepath);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
    header(("location: {$redirect}/logout.html"), true);
}

echo "<center>";

if(session_status() == PHP_SESSION_ACTIVE){
    if(isset($_POST['username'])){
        if ($_POST['username'] == null || strlen($_POST['username']) == 0) {
            echo "A username must be entered. Click <a href=\"login.php\">here</a> to return to the login screen.";
        }
        else{
            $_SESSION["loggedIn"] = 1;
            $_SESSION["username"] = $_POST['username'];
        }   
    }

    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1){
        echo "Welcome " . $_SESSION['username'];
        echo "<a href=\"content2.php\"> content2 </a>";
    }
    else{
        header( 'Location: login.php' ) ;
    }
}

echo "</center";

?>