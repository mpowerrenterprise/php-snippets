<?php

$uploadingFile="files/" . basename($_FILES["file1"]["name"]);//name of the file.
$exten= pathinfo($_FILES["file1"]["name"],PATHINFO_EXTENSION);

if($_POST["subBtn1"]){
    
    $check= getimagesize($_FILES["file1"]["tmp_name"]);//check if it img or fake.
    
    if($check==TRUE){//if it is img run this block of code.
    
        if($exten=="jpg"){//if the extension  is qual to jpg.
            
            move_uploaded_file($_FILES["file1"]["tmp_name"], $uploadingFile);
            echo "The file has been uploaded";
            
            
        }else{//if it is not an jpg.
            
            echo "It is not an jpg file";
            
        }
        
        
    } else {//if it is not an image.
    
        echo "It is not an image";
        
    }
}

?>