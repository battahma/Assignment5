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
echo "<form id=\"LoginForm\" style=\"text-align: center\" action=\"content1.php\" method=\"POST\">\n";
echo "<table style=\"margin: auto\">";
echo "<tr>";
echo "<td>Login Name:</td>";
echo "<td><input id=\"username\" type=\"text\" name=\"username\"></td>\n";
echo "</tr>";
echo "<tr>";
echo "<td>Password: </td>";
echo "<td><input id=\"password\" type=\"password\" name=\"password\"></td>";
echo "<td><input type=\"text\" name=\"username\"><input type=\"submit\" value=\"Login\"></td>\n";
echo "</tr>";
echo "</table>";
echo "</form>\n";

	//The Guest Button
echo "
	<div class=\"wrapper\">
	<button type=\"button\" 
	id=\"GuestButton\" 
	onclick = \"GuestLogin()\">
	Login as Guest
	</button>
	</div>";

	//A little bit of styling to center that Button
echo "
	<style type=\"text/css\">
	div.wrapper{
		text-align: center;
	}
	</style>";

	//function to Login as a Guest
echo "<script type=\"text/javascript\">
	function GuestLogin(){
	document.getElementById(\"username\").value = \"Guest\";
	document.getElementById(\"password\").value = \"\";
	document.getElementById(\"LoginForm\").submit();
	}
	</script>
";

echo "</body>\n";
echo "</html>\n";
?>