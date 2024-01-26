## Include and Require

#### Example 1

##### home.html

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <h1>Hi kuna</h1>
    </body>
</html>
```

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
        <title></title>
        
        <script>
         
      
        </script>
        
    </head>
    <body>
        
        <div id="menu">
            
            <?php
            
            echo  include 'foot.php';//include is use to marge a php file with another php file.
            
            ?>
            
        </div>
        
    </body>
</html>
```

##### foot.php

```PHP
<?php

echo date("h:i:s:A");

?>
```
#### Output 
![Example 4.1](../../0-media/4-1.png)

#### Example 2

##### home.html

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <h1>Hi kuna</h1>
    </body>
</html>
```

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
        <title></title>
        
        <script>
         
      
        </script>
        
    </head>
    <body>
        
        <div id="menu">
            
            <?php include 'foot.php';?>//include is mainly used for joining external files to the current script.
            
        </div>
        
    </body>
</html>

```

##### foot.php

```PHP
<?php

echo '<a href="/home.html">Home</a> -
<a href="home.html">HTML Tutorial</a> -
<a href="home.html">CSS Tutorial</a> -
<a href="home.html">JavaScript Tutorial</a> -
<a href="home.html">PHP Tutorial</a>';

?>
```
#### Output 
![Example 4.2](../../0-media/4-2.gif)

#### Example 3

##### home.html

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <h1>Hi kuna</h1>
    </body>
</html>

```

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
        <title></title>
        
        <script>
         
        </script>
        
    </head>
    <body>
        
        <div id="menu">
            
            <?php
            
            include 'var.php';//Include is for marging php files together.
            
            echo "$car1"."<br>";
            echo "$car2"."<br>";
            echo "$car3"."<br>";
            echo "$car4"."<br>";
            
            ?>
            
        </div>
        
    </body>
</html>

```

##### var.php

```PHP
<?php

$car1="BMW";
$car2="Fade";
$car3="SABB";
$car4="Landover";

?>
```
#### Output 
![Example 4.3](../../0-media/4-3.png)

#### Example 4

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
        <title></title>
        
        <script>
        
        </script>
        
    </head>
    <body>
        
        <div id="menu">
            
            <?php
            
            require 'var.php';//Use require when the file is required by the application.
                              //Use include when the file is not required and application should continue when file is not found.
            
            echo "$car1"."<br>";
            echo "$car2"."<br>";
            echo "$car3"."<br>";
            echo "$car4"."<br>";
            
            ?>
            
        </div>
        
    </body>
</html>

```

##### var.php

```PHP
<?php

$car1="BMW";
$car2="FADE";
$car3="Landover";
$car4="Maker";

?>
```
#### Output 
![Example 4.4](../../0-media/4-4.png)