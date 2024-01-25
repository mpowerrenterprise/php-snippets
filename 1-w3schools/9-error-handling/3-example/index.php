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
        $test = 2;

        if ($test > 1) {
            
            trigger_erro("Value must be 1 or bellow");
        }
        
        //In a script where users can input data it is useful to trigger errors when an illegal input occurs. In PHP, this is done by the trigger_error() function.
        ?>

    </body>

</html>
