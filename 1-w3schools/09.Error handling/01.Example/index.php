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
        
        if(file_exists("kuna.txt")){
            
          $file= fopen("kuna.txt","r");
            
        }else{
            
            die("File not found");          
        }
        
        ?>

    </body>

</html>
