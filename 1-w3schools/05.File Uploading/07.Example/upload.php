<?php

$place='files/';
$file1= $place.basename($_FILES["file1"]["name"]);
$exten= pathinfo($file1,PATHINFO_EXTENSION);
$upload=0;

if($_POST["subBtn1"]){
    
    $checkImgOrNot= getimagesize($_FILES["file1"]["tmp_name"]);
    
    if($checkImgOrNot==false){
        
        $upload=0;
        echo "It is not an image"."<br>";
        
    }else{
        
        $upload=1;
        
        
    }
    
    if($exten=="jpg" or $exten=="png"){
        
        $upload=1;
        
    }else{
        
        echo "Png and Jpg are allow"."<br>";
        $upload=0;
        
    }
    
    if(!file_exists($file1)){
        
        $upload=1;
        
    }else{
        
        echo "already exit"."<br>";
        $upload=0;
        
    }
    
    if($_FILES["file1"]["size"]>1000000){
        
        echo "The image must be less than 1mb";
        $upload=0;
        
    }else{
        
        $upload=1;
    }
    
    
    if($upload==1){
        
        move_uploaded_file($_FILES["file1"]["tmp_name"], $file1);
        echo "Sent to the server";
        
        
    }
    
}

?>