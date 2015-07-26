

<?php
echo '<br><br><br><br>';
echo '<div style="text-align:center"><h2> Create Your Multiplication Table </h2></div>';
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

//Creating the Table function
function createTable($x, $X, $y, $Y){
	echo '<table align = "center" border="1" cellspacing=0>'; echo '<tr>';
	echo '<th></th>';
	for ($i=$x;$i<=$X;$i++){
		echo '<th>'.$i.'</th>';
	}
	for ($i=$y;$i<=$Y;$i++){
		echo '<tr><td style="font-weight:bold">' .$i. '</td>';
		for($j=$x;$j<=$X;$j++){
			echo '<td>'.$j*$i.'</td>';
		}
		echo '</tr>';
	}  
	echo '</table>';
	
	echo '<style media="screen" type="text/css">
			tr:nth-child(2n){
				background:lightgreen;
			}
		</style>';
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
		if(ctype_digit($MinCand) && ctype_digit($MaxCand) && ctype_digit($MinPlr) && ctype_digit($MaxPlr)){
			$MinCand = (int)$MinCand;
			$MaxCand = (int)$MaxCand;
			$MinPlr = (int)$MinPlr;
			$MaxPlr = (int)$MaxPlr;
			
			
			if(isBigger($MinCand, $MaxCand)||isBigger($MinPlr, $MaxPlr))
			{
				//The Min is Bigger than the Max
				if(isBigger($MinCand, $MaxCand)){
					echo 'Minimum Multiplicand value is bigger than Maximum Multiplicand';
					echo '<br';
				}
				if(isBigger($MinPlr, $MaxPlr)){
					echo 'Minimum Multiplier value is bigger than Maximum Multiplier';
					echo '<br>';
				}
			}
			else{
				//Create the Table
				createTable($MinCand, $MaxCand, $MinPlr, $MaxPlr);
				
			}
		}
		else{
			if(!ctype_digit($MinCand)){echo "Error: Minimum Multiplicand is not an integer."; echo "<br>";}
			if(!ctype_digit($MaxCand)){echo "Error: Maximum Multiplicand is not an integer."; echo "<br>";}
			if(!ctype_digit($MinPlr)){echo "Error: Minimum Multiplier is not an integer."; echo "<br>";}
			if(!ctype_digit($MaxPlr)){echo "Error: Maximum Multiplier is not an integer."; echo "<br>";}
		}
	}
	else{
		//Values are null
		if(empty($MinCand)){echo "Minimum Multiplicand missing Parameter"; echo "<br>";}
		if(empty($MaxCand)){echo "Maximum Multiplicand missing Parameter"; echo "<br>";}
		if(empty($MinPlr)){echo "Minimum Multiplier missing Parameter"; echo "<br>";}
		if(empty($MaxPlr)){echo "Maximum Multiplier missing Parameter"; echo "<br>";}
	}
}
else{
	//Values are not set
	echo 'Please set the values';
}
	
?>

<div style="text-align:center">
<form action ="multtable.php" method="GET">
<br>
<br>
	Minimum Multiplicand:<br><input type="text" name="Min-Multiplicand"><br>
	Maximum Multiplicand:<br><input type="text" name="Max-Multiplicand"><br>
	Minimum Multiplier:<br><input type="text" name="Min-Multiplier"><br>
	Maximum tiplier:<br><input type="text" name="Max-Multiplier"><br>
	<input type= "submit" value ="Submit">
</form>
</div>