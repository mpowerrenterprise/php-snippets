<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
 $cookieName="name";
 $value=$_POST["name"];
 setcookie($cookieName,$value,time()+(86400*30),"/");// "/" this means this cookie belongs to entire website.
    
}

?>


<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>This is the title</title>

        
    </head>
    
    <body>
     
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            <input type="text" name="name">
            <input type="submit">
  
        </form>
      
        
        <?php
        
        if(isset($_COOKIE[$cookieName])){
            
         if($_COOKIE[$cookieName]=="kuna"){
             
             echo "Welcome kuna";
         
             
         }elseif($_COOKIE[$cookieName]=="joker"){
             
             echo "Welcome Joker";
             
             
         }
            
        }else{
            echo "The cookie is not work";
            
        }
        
            
            
        ?>
     
    </body>
    
</html>
