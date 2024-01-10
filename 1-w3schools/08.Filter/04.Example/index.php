<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>This is the title</title>

        
    </head>
    
    <body>
     
      
      
     <?php
     
    $urr="http://localhost:8017/www.w3schools.com/php/php_filter.html";
    $url= filter_var($urr,FILTER_SANITIZE_URL);//SANITIZE is use to remove illegal charaters.
    
    if(filter_var($url,FILTER_VALIDATE_URL)==false){
       
        echo "Wrong Url";
        
    }else{
        
        echo "Right URL";
        
    }
     
     //The filter_var() function has many methods that checks if something is true or fake.
    //SANITIZE is for removing illegal charaters.
     
     ?>
     
    </body>
    
</html>
