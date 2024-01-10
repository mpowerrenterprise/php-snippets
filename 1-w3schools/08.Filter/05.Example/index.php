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
        
        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
        if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)==false){
            
            echo "Yes";
            
        }else{
            
            echo "No";
            
        }
        //This appliation checks if it is IPV6
        
        ?>
     
    </body>
    
</html>
