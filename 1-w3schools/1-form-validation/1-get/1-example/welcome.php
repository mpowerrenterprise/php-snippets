<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){//checks if it has GET request.

    if($_GET["user"]=="kuna" and $_GET["pass"]=="123"){//checks the values.
        
        echo "You are Right";        
    } else {
    
        echo 'Password or username wrong';
        
    }
    
    
}

#GET is use to sent Insensitive data.The data will be visibled in the url bar,if you use GET METHOD. 
?>