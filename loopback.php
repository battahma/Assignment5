<?php

header('Content of type text or NULL');

if($_GET != NULL){
    $jsonObject = json_encode($_GET);
    echo $jsonObject;
    return $jsonObject;
    }
    
    
if($_POST != NULL){
    $jsonObject = json_encode($_POST);
    echo $jsonObject;
    return $jsonObject;
    }
    
    
?>
