## Form Validation

### 1. Get

#### Example 1

##### Intex PHP

```PHP
<!Doctype html>
<html>
    
    <head>
        
        <title>This is title</title>
        
        <script>
     
        </script>
        
    </head>
    
    <body>
  
        <form action="welcome.php" method="get">
            
            <input type="text" name="user" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit">
            
        </form>
       
    </body>
    
</html>
```
##### Welcome PHP

```PHP

<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){//checks if it has GET request.

    if($_GET["user"]=="kuna" and $_GET["pass"]=="123"){//checks the values.
        
        echo "You are Right";        
    } else {
    
        echo 'Password or username wrong';
        
    }
    
}

#GET is use to sent Insensitive data.The data will be visibled in the url bar,if you use GET METHOD. 
?>

```
#### OutPut 
![Example 1.1](../../0-media/1-1.png)

### 2. Post

#### Example 1

##### Index PHP

```PHP
<!Doctype html>
<html>
    
    <head>
        
        <title>This is title</title>
    
        <script>
     
        </script>
        
    </head>
    
    <body>
        
        <form action="welcome.php" method="POST">
            
            <input type="text" placeholder="Username" name="user">
            <input type="password" placeholder="Password" name="pass">
            <input type="submit">
            
        </form>
        
    </body>
    
</html>
```

##### Welcome PHP

```PHP
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){//Checks has it got POST method.
    
    if($_POST['user']=="kuna" && $_POST['pass']=="123"){
        
        echo "You have entered the right value";
        
    } else {
    
        echo "Something is wrong with your input";
        
    }
    
}

#POST is used to sent sensitive data. It will not visiable in the URL bar.
?>
```
#### Output
![Example 1.2](../../0-media/1-2.png)

### 3. Secure Form

#### Example 1

##### Index PHP
```PHP
<!DOCTYPE html>
<html>
    
    <head>
        
        <title>This is the title</title>
        
    </head>
    
    <body>
     
        <h2>PHP Form</h2>
        
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            
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
```

#### Output
![Example 1.3.1](../../0-media/1-3-1.png)

#### Example 2

##### Index PHP

```PHP
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
```
##### PHP1 PHP

```PHP
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
       
?>
```
#### Output
![Example 1.3.2](../../0-media/1-3-2.gif)

### 4. Form

#### Example 1

##### Index PHP

```PHP
<!DOCTYPE html>

<html>

<head>

<title>This is the title</title>

<script>

</script>

</head>

<body>

    <form action="system.php" method="post">

<label>Name:<input type="text" name="name"></label><br>
<label>Email:<input type="email" name="email"></label><br>
<label>Website:<input type="url" name="url"></label><br>
<label>Gender:<input type="radio" name="gender"><input type="radio" name="gender"></label><br>
<input type="submit">


</form>

</body>

</html>
```
##### System PHP

```PHP
<?php

$name = $_POST["name"];
$email = $_POST["email"];
$url = $_POST["url"];


if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(empty($name)){
        
        echo "The name is required "."<br>";        
    }
    
    if(empty($email)){
        
        echo "The email is requried "."<br>";
        
    }
    
    if(empty($url)){
        
        echo "The URL is empty";
        
    }
     
}

?>
```

#### Output
![Example 1.4.1](../../0-media/1-4-1.png)

#### Example 2

##### Index PHP

```PHP
<!DOCTYPE html>

<html>

<head>

<title>This is the title</title>


<script>

</script>


</head>

<body>


   
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    
          <input type="text" name="name" placeholder="Name"><br>
          <input type="email" name="email" placeholder="Email"><br>
          <input type="url" name="website" placeholder="Webste"><br>
          <textarea rows="5" name="comment" cols="26"></textarea><br>
          <input type="radio" name="gender">
          <input type="radio" name="gender"><br>
          <input type="submit">
          
    
          
    </form>
    
    <?php 
   
    $nameErr = $emailErr = $urlErr = $commentErr = $genderErr = ""; 
    $name = $email = $url = $comment = $gender = "";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        if(empty($_POST["name"])){
            
            echo "The name is required "."<br>";
            
        }else{
            
            $name=text_gen_fun($_POST["name"]);
            
        }
            
        if(empty($_POST["email"])){
            
            echo "The email is required"."<br>";
            
        }else{
        
            $email= text_gen_fun($_POST["email"]);
           
        }
        
        if(empty($_POST["website"])){
            
            echo "The website is empty "."<br>";
            
        }else{
            
            $url= text_gen_fun($_POST["website"]);
            
        }
        
        if(empty($_POST["comment"])){
            
            echo "The comment box must be filled out";
             
        }else{
            
            $gender= text_gen_fun($_POST["gender"]);
            
        }
        
    }
    
    function text_gen_fun($postData){//This function does not anything special.
        
        return "The Post data ".trim($postData);
    }
    
    ?>

</body>

</html>
```
#### Output
![Example 1.4.2](../../0-media/1-4-2.png)

#### Example 3

##### Index PHP

```php
<!DOCTYPE html>
<html>
    
    <head>
        
        <title>This is the title</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
       
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            <input type="text" name="name" placeholder="Name"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="text" name="website" placeholder="Website"><br>
            <input type="radio" name="genders">
            <input type="radio" name="genders">
            <input type="submit">
            
        </form>
       
        <?php
        $nameErr = $emailErr = $websiteErr = $gendersErr="";
        $name = $email = $website = $genders="";
        
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            if(empty($_POST["name"])){
                
                $nameErr="empty name";
        
                
            }else{
                
                $name=text_checkerFunction($_POST["name"]);
                
                if(!preg_match('/^[a-zA-Z]*$/', $name)){
                    
                    $nameErr="Only Letters and white spces are allowed";
                    
                }
                
            }
            
            if(empty($_POST["email"])){
                
                $emailErr="Empty Email";
           
            }else{
           
                $email= text_checkerFunction($_POST["email"]);
                
               if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                   
                   $emailErr="Invalid Email";
                   
               }
                
            }
            
            if(empty($_POST["website"])){
                $websiteErr="Empty Website";
                
            }else{
                
                $website= text_checkerFunction($_POST["website"]);
                
                if(!filter_var($website,FILTER_VALIDATE_URL)){
                    
                    $websiteErr="Invalid url";
                    
                }
 
            }
            
            if(empty($_POST["genders"])){
         
                $gendersErr="Empty Genders";
                
            }else{
                
                $genders= text_checkerFunction($_POST["genders"]);
                
            }
            
        }
        
        function text_checkerFunction($data){
            
            return $data;
            
        }
        echo $nameErr."<br>";
        echo $emailErr."<br>";
        echo $websiteErr."<br>";
        echo $gendersErr;
        ?>
        
    </body>
    
</html>
```

#### Output
![Example 1.4.3](../../0-media/1-4-3.png)

#### Example 4

##### Form System PHP

```PHP
<?php
        $nameError = $emailError = $websiteError = $phoneNumberError = $genderError="";
        $name = $email = $website = $phoneNumber = $gender=""; 
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           
            if(empty($_POST["name"])){
                
                $nameError="Empty Name";
                
            }else{
                
                $name=ErrorFunction($_POST["name"]);
                
                if(!preg_match('/^[a-zA-Z]*$/', $name)){
                    
                    $nameError="Invalid name";
     
                }    
            }
  
            if(empty($_POST["email"])){
                
                $emailError="Empty Email";
                
            }else{
                
                $email= ErrorFunction($_POST["email"]);
                
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    
                    $emailError="Invalid Email";
                }
                
            }
            
            if(empty($website)){
                
                $websiteError="Empty Website";
            
                
            }else{
                
                $website= ErrorFunction($_POST["website"]);
                
                if(!filter_var($website,FILTER_VALIDATE_URL)){
                    
                    $websiteError="Invalid URl";
                }
                
            }
            
            if(empty($_POST["pnum"])){
                
               $phoneNumberError="Empty Phone number";
               
            }else{
                
                $phoneNumber= ErrorFunction($_POST["pnum"]);
                
                if(!preg_match("/[0-9]/", $phoneNumber)){
                    
                    $phoneNumberError="Invalid Phone Number";
                    
                }
                
            }
            
        if(empty($_POST["gen"])){
            
            $genderError="Empty Gender";
            
        }else{
              
            
        }
           
        }
        
        function ErrorFunction($textData){
            
            return $textData;
            
        }
        
        echo $nameError."<br>";
        echo $emailError."<br>";
        echo $websiteError."<br>";
        echo $phoneNumberError."<br>";
        echo $genderError."<br>";
        
        ?>
        
```

##### Index PHP

```PHP
<!DOCTYPE html>
<html>
    
    <head>
        
        <title>This is the title</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
       
        
     
        <form method="post" action="formSystem.php"> 
            
            <input type="text" name="name" placeholder="Name"><br>
            <input type="text" name="email" placeholder="E-Mail"><br>
            <input type="text" name="website" placeholder="Website"><br>
            <input type="text" name="pnum" placeholder="Phone Number"><br>
            <input type="radio" name="gen" placeholder="Gender">
            <input type="radio" name="gen" placeholder="Gender"><br>
            <input type="submit">
            
        </form>
        
        <?php
        $nameError = $emailError = $websiteError = $phoneNumberError = $genderError="";
        $name = $email = $website = $phoneNumber = $gender=""; 
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           
            if(empty($_POST["name"])){
                
                $nameError="Empty Name";
                
            }else{
                
                $name=ErrorFunction($_POST["name"]);
                
                if(!preg_match('/[a-zA-Z]*/', $name)){
                    
                    $nameError="Invalid name";
     
                }    
            }
  
            if(empty($_POST["email"])){
                
                $emailError="Empty Email";
                
            }else{
                
                $email= ErrorFunction($_POST["email"]);
                
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    
                    $emailError="Invalid Email";
                }
                
            }
            
            if(empty($website)){
                
                $websiteError="Empty Website";
            
                
            }else{
                
                $website= ErrorFunction($_POST["website"]);
                
                if(!filter_var($website,FILTER_VALIDATE_URL)){
                    
                    $websiteError="Invalid URl";
                }
                
            }
            
            if(empty($_POST["pnum"])){
                
               $phoneNumberError="Empty Phone number";
               
            }else{
                
                $phoneNumber= ErrorFunction($_POST["pnum"]);
                
                if(!preg_match("/[0-9]/*", $phoneNumber)){
                    
                    $phoneNumberError="Invalid Phone Number";
                    
                }
                
            }
            
        if(empty($_POST["gen"])){
            
            $genderError="Empty Gender";
            
        }else{
            
            
            
        }
           
        }
        
        function ErrorFunction($textData){
            
            return $textData;
            
        }
        
        echo $nameError."<br>";
        echo $emailError."<br>";
        echo $websiteError."<br>";
        echo $phoneNumber."<br>";
        echo $genderError."<br>";
        
        ?>
        
    </body>
    
</html>
```

#### Output
![Example 1.4.4](../../0-media/1-4-4.png)
