<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){//Checks has it got POST method.
    
    if($_POST['user']=="kuna" && $_POST['pass']=="123"){
        
        echo "You have entered the right value";
        
    } else {
    
        echo "Something is wrong with your input";
        
        
    }
    
    
}

#POST is used to sent sensitive data. It will not visiable in the URL bar.
?>