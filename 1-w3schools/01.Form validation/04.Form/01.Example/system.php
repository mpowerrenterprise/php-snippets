<?php

$name = $_POST["name"];
$email = $_POST["email"];
$url = $_POST["url"];


if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(empty($name)){
        
        echo "The name is required "."<br>";        
    }
    
    if(empty($email)){
        
        echo "The email is requried "."<br>";
        
    }
    
    if(empty($url)){
        
        echo "The URL is empty";
        
    }
    
    
    
    
    
}

?>