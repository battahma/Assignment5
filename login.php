<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-type: text/plain');

echo "<html>\n";
echo "<head>\n";
echo "<title> Login </title>\n";
echo "</head>\n";
echo "<body>\n";

echo "<br>\n";
echo "<br>\n";
echo "<br>\n";
echo "<br>\n";
echo "<br>\n";
/*http://web.engr.oregonstate.edu/~osterbit/2/repo/class-content/form_tests/Formtest.php*/
echo "<form style=\"text-align: center\" action=\"content1.php\" method=\"POST\">\n";
echo "<table style=\"margin: auto\">";
echo "<tr>";
echo "<td>Login Name:</td>";
echo "<td><input type=\"text\" name=\"username\"><input type=\"submit\" value=\"Login\"></td>\n";
echo "</tr>";
echo "</table>";
echo "</form>\n";

echo "</body>\n";
echo "</html>\n";
?>