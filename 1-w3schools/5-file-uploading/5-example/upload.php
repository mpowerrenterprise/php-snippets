<?php

$file1 = basename($_FILES["file1"]["name"]); //This will upload the files to the server desktop (in the front root).
$ex = pathinfo($_FILES["file1"]["name"], PATHINFO_EXTENSION);
$upload = 0;

if ($_POST["subBtn1"]) {

    $checkImg = getimagesize($_FILES["file1"]["tmp_name"]);

    if (!$checkImg) {//If it is not equal to true [means false];

        $upload = 0;
        echo "Not an image";
        
    } else {

        $upload = 1;
    }

    if ($ex == "jpg") {
    
        $upload=1;
        
        
    }else{
        
        $upload=0;
        echo "JPG files are only allowed";

    }
    
    if(file_exists($file1)){//This checks weather the file is already exit or not. 
        
        $upload=0;
        echo "Already Exits";
        
    }else{
        
       $upload=1;
        
    }
    
    if($upload==1){
        
        move_uploaded_file($_FILES["file1"]["tmp_name"],$file1);
        echo "The file has been sent";
        
    }else{
        
        echo "The file has not been uploaded";
        
    }
}
?>