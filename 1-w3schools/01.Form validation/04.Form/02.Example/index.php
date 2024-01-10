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