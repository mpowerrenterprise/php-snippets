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
        