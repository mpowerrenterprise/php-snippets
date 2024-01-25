<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php

session_start();

//We need to set the session_start() function before the html to use sesstion.

?>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>This is the title</title>

        
    </head>
    
    <body>
     
      
      
     <?php
     
     $_SESSION["name"]="kuna";
     $_SESSION["age"]="21";
     
    
     
     
     ?>
     
    </body>
    
</html>
