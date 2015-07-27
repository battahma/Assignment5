<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-type: text/plain');

session_start();

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1){
    echo "<center>";
    echo "Welcome " . $_SESSION['username'];
    echo "<a href=\"content1.php\"> content1 </a>";
    echo "<br>";
    echo "<a href=\"logout.php\">Logout</a>";
    echo "</center";
}
else{
    header( 'Refresh:3; URL=login.php' ) ;
    echo "<center>";
    echo "<br><br><br><br>";
    echo "You need to login first.  Redirecting to login page...";
    echo "</center";
}

?>