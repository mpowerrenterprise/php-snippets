<!DOCTYPE html>
<html>
    
    <head>
        
        <title>This is the title</title>
        
    </head>
    
    <body>
        
     
        <h2>PHP Form</h2>
        
        <form action="php1.php" method="post">
            
            <label>Name:<input type="text" name="name"></label><br>
            <label>E-mail:<input type="email" name="mail"></label><br>
            <label>Website:<input type="url" name="site" </label><br>
            <label><textarea name="com" rows="10" cols="35"></textarea></label><br>
            <label>Gender</label><br>
            <label>Female<input type="radio" name="gen"></label>
            <label>Male<input type="radio" name="gen"></label><br>
            
            <input type="submit">
                
           
        </form>
      
        <br>
       <?php

$name = $email = $gender = $comment = $website="";//All variable has empty value.

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $name = test_dataInp($_POST["name"]);
    $email = test_dataInp($_POST["mail"]);
    $gender = test_dataInp($_POST["gen"]);
    $comment = test_dataInp($_POST["com"]);
    $website = test_dataInp($_POST["site"]);
    
}

function test_dataInp($data){
    
    $data = trim($data); //Trim whitespces
    $data= stripcslashes($data);//removes shalashes
    $data= htmlspecialchars($data);//converts html entities.
    return $data;
    
    
}

        
        echo "<h1>$name</h1>";
        echo "<br>";
        echo "<h1>$email</h1>";
        
        //htmlspecialchars to prevent XSS attack.
        //$_SERVER["PHP_SELF"] is the current file. 
        //$_SERVER["SCIPT_NAME"] is same as $_SERVER["PHP_SELF"];
        
        
       
?>
    </body>
    
</html>