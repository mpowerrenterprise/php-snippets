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
     
     $email="kuna.gta@gamil.com";
     $email= filter_var($email,FILTER_SANITIZE_EMAIL);//remove all illegal charaters.
     
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)==false){
         
         echo "$email is valid";
         
     }else{
         
         echo "$email is not valid";
         
         
     }
     
     //The filter_var() function has many methods that checks if something is true or fake.
     
     ?>
     
    </body>
    
</html>
