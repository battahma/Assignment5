

<?php

//http://localhost/assignment5/Multtable.php/?Min-Multiplicand=1&Max-Multiplicand=2&Min-Multiplier=3&Max-Multiplier=4
//Function to check if the Min is Bigger than the Max
function isBigger($min, $max){
	if ($min > $max){
		return true;
	}
	else{
		return false;
	}
}

//First check if they are set
if(isset($_GET['Min-Multiplicand']) && isset($_GET['Max-Multiplicand']) && isset($_GET['Min-Multiplier']) && isset($_GET['Max-Multiplier'])){
	$MinCand = $_GET['Min-Multiplicand'];
	$MaxCand = $_GET['Max-Multiplicand'];
	$MinPlr = $_GET['Min-Multiplier'];
	$MaxPlr = $_GET['Max-Multiplier'];
	
	//Second check to see if they are Null
	if(!empty($MinCand) && !empty($MaxCand) && !empty($MinPlr) && !empty($MaxPlr))
	{
		if(isBigger($MinCand, $MaxCand)||isBigger($MinPlr, $MaxPlr))
		{
			//The Min is Bigger than the Max
			echo 'Error1: Min is bigger than max';
		}
		else{
			if(is_int($MinCand) && is_int($MaxCand) && is_int($MinPlr) && is_int($MaxPlr)){
				//Create the Table
				echo 'We are good to go hoss';
			}
			else{
				echo 'Error4: Value(s) are not integers';
			}
		}
	}
	else{
		//Values are null
		echo 'Error2: Values are have nothing in them';
	}
}
else{
	//Values are not set
	echo 'Error 3: Values not set';
}
	
?>

<form action ="multtable.php" method="GET">
	Min-Multiplicand:<br><input type="text" name="Min-Multiplicand"><br>
	Max-Multiplicand:<br><input type="text" name="Max-Multiplicand"><br>
	Min-Multiplier:<br><input type="text" name="Min-Multiplier"><br>
	Max-Multiplier:<br><input type="text" name="Max-Multiplier"><br>
	<input type= "submit" value ="Submit">
</form>