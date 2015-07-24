<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-type: text/plain');

session_start();

/*if(isset($_POST['action']) && $_POST['action'] == 'end') {
    $_SESSION = array();
    session_destroy();
    $filepath = explode('/', $_SERVER['PHP_SELF'], -1);
    $filepath = implode('/', $filepath);
    $redirect = "http://".$_SERVER['HTTP_HOST'].$filepath;
    header(("location: {$redirect}/logout.html"), true);
}*/

echo "<center>";

if(session_status() == PHP_SESSION_ACTIVE){
    $_SESSION = array();
    session_destroy();
    echo "<br><br><br><br>";
    echo "You are being logged out.";
    header("Refresh:3; URL=login.php");
}

echo "</center>";

?>