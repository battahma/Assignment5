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

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1){
    echo "Welcome " . $_SESSION['username'];
    echo "<a href=\"content2.php\"> content2 </a>";
}
else{
    header( 'Location: login.php' ) ;
}

echo "</center";

?>