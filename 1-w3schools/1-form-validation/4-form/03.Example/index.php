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