## Error Handling

#### Example 1

##### index.php

```PHP
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

![Example 9.1](../../0-media/9-1.png)

#### Example 2

##### index.php

```PHP
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

![Example 9.2](../../0-media/9-2.png)

#### Example 3

##### index.php

```PHP
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

![Example 9.3](../../0-media/9-3.png)

