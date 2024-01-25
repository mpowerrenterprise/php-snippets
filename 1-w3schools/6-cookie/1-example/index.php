<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

$name="name";
$value="kuna";
setcookie($name,$value,time()+(86400*30),"/")// "/" this cookie is blonged to the entire website.
        
?>


<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>This is the title</title>

        
    </head>
    
    <body>
     
      
      
        
        <?php
        
        if(isset($_COOKIE[$name])){
            
            echo "The cookie name is ".$_COOKIE[$name];
            
        }else{
            
            echo "There is no cookie";
            
        }
            
            
        ?>
     
    </body>
    
</html>
