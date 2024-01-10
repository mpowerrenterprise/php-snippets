<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
       $car=[["Volvo","red",698],["BMW","White",358],["Landover","Green",456],["SAbb","Yellow",565]];
       
       for($row=0;$row<count($car);$row++){
           
           $nums=$row+1;#to start form 1.
		   
          echo "<p><b>The Row number is $nums</b></p>";
          
          for($a=0;$a<count($car[$a]);$a++){
              
              echo "<ul>";
              
              echo "<li>".$car[$row][$a]."</li>";
              
              echo "</ul>";
              
          }
       }
       
        ?>
        
        
    </body>
</html>
