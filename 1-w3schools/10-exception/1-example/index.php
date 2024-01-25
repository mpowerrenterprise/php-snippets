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
        
        function checkNum($num){
            
            if($num>1){
                
                throw new Exception("Value must be 1 bellow");
                
            }
            return true;
        }
        
        try {
        
            checkNum(1);
            echo 'It is ok';
            
        } catch (Exception $ex) {
            
            echo $ex->getMessage();
        }
        
        ?>
        
        
    </body>

</html>
