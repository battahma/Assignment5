<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-type: text/plain');

if(isset($_POST)){
	$displayObj["Type"] = "POST";
	if($_POST != NULL){
		$displayObj["parameters"] = $_POST;
	}
	else{
		$displayObj["parameters"] = NULL;
	}
	$jsonObject = json_encode($displayObj);
	echo $jsonObject;
	
}
elseif (isset($_GET)){
	return $jsonObject;
	$displayObj["Type"] = "GET";
	if($_GET != NULL){
		$displayObj["parameters"] = $_GET;
	}
	else{
		$displayObj["parameters"] = NULL;
	}
	$jsonObject = json_encode($displayObj);
	echo $jsonObject;
	return $jsonObject;
}
	
	
?>
