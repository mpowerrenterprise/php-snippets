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
     
     $ip="175.0.0.1";
     
     if(!filter_var($ip,FILTER_VALIDATE_IP)==false){
         
         echo "valid ip";
         
     }else{
         
         echo "Not validate";
         
     }
     
     //The filter_var() function has many methods that checks if something is true or fake.
     
     ?>
     
    </body>
    
</html>
