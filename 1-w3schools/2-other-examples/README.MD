## Other Examples

#### Example 1

##### index.php

```PHP
<!DOCTYPE html>
<html>
    
    <head>
        
        <title>This is the title</title>
        
    </head>
    
    <body>
        
        
        <form action="php1.php" method="POST">
            
            <input type="text" name="txt1" placeholder="Type something">
            <input type="submit">
            
            
        </form>
        
        
        
    </body>
    
</html>
```
##### php1.php

```PHP
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    echo "Welcome ".$_POST["txt1"];
    
}

?>

```
#### Output 
![Example 2.1](../../0-media/2-1.gif)
