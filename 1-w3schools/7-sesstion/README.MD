## Sesstion

#### Example 1

##### index.php

```PHP
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

```

##### upload.php

```PHP

<?php
session_start();

echo $_SESSION["name"];

//session_unset() and session_destory() by using these methods we can delete session variables.
?>
```
#### Output 
![Example 7.1](../../0-media/7-1.png)

