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
        
       
        function customErr($errNo,$errStr,$other,$line,$th){
            
            echo "<b>Error:</b> [$errNo] $errStr in line $line ";
            
        }
        
        set_error_handler("customErr");
        
      
        echo $kuna;
        
        //Now i have written a function to handle errors.
        
        ?>

    </body>

</html>
