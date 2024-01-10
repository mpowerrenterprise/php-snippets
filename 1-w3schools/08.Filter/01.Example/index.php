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
     
     $int=50;
     
     if(!filter_var($int,FILTER_VALIDATE_INT)==FALSE){
         
         echo "It is an integer";
         
     }else{
         
         echo "It is not an integer";
         
     }
     
     //filter_var(theVariableToCheck,Type) is used to validate data.It has many validation type to perform.
     //filter_var() is used to validate email string number integer float ip address and more.
     ?>
     
    </body>
    
</html>
