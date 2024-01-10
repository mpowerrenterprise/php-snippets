<?php

$name = $email = $gender = $comment = $website="";//All variable has empty value.

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name = test_dataInp($_POST["name"]);
    $email = test_dataInp($_POST["mail"]);
    $gender = test_dataInp($_POST["gen"]);
    $comment = test_dataInp($_POST["com"]);
    $website = test_dataInp($_POST["site"]);
    
}

function test_dataInp($data){
    
    $data = trim($data); //Trim whitespces
    $data= stripcslashes($data);//removes shalashes
    $data= htmlspecialchars($data);//converts html entities.
    return $data;
    
    
}

        
        echo "<h1>$name</h1>";
        echo "<br>";
        echo "<h1>$email</h1>";
        
        
        
       
?>