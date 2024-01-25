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
        $int = 123;
        $min = 0;
        $max = 200;

        if (!filter_var($int, FILTER_VALIDATE_INT) == false) {

        if($int>$min and $int<$max){
            
            echo "It is an integer and it is less than 200";
            
        }else{
            
           echo "It is an integer but it is gratar than 200";
            
        }
        
        } else {

            echo "It is not an integer";
        }
        ?>

    </body>

</html>
