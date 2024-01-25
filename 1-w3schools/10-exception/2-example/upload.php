<?php


   function checkPass($pass){
       
       if($pass=="kuna"){
           
           throw new Exception("Welcome kuna");
       
       }
       
       return true;
       
   }
    
    try{
        
        checkPass($_POST["txt"]); 
        echo "Somethig is wrong";
        
    }catch (Exception $ex){
        
        echo $ex->getMessage();
        
    }
    
    


?>