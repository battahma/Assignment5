<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-type: text/plain');

session_start();

echo "<center>";

if(session_status() == PHP_SESSION_ACTIVE){
    $nulluser = 0;
    if(isset($_POST['username'])){
        if ($_POST['username'] == null || strlen($_POST['username']) == 0) {
            echo "A username must be entered. Click <a href=\"login.php\">here</a> to return to the login screen.";
            $nulluser = 1;
        }
        else{
            $_SESSION['visited'] = 0;
            $_SESSION["loggedIn"] = 1;
            $_SESSION["username"] = $_POST['username'];
        }   
    }

    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1 && $nulluser == 0){
        echo "Hello " . $_SESSION['username'];
        echo "<br>";
        echo "You have visited this page " . $_SESSION['visited'] . " times before. Click <a href=\"logout.php\">here</a> to logout.\n";
        echo "<br>";
        echo "<a href=\"content2.php\"> content2 </a>";
        $_SESSION['visited']++;
    }
    elseif($nulluser == 0){
        echo "<br><br><br><br>";
        echo "You need to login first.  Redirecting to login page...";
        header( 'Refresh:3; URL=login.php' ) ;
    }
}

echo "</center";

?>