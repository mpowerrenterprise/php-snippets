<?php

$file1='files/' . basename($_FILES["file1"]["name"]);
$exten= pathinfo($file1,PATHINFO_EXTENSION);//Get the extention of the uploaded file.

if($exten=='jpg'){//check if it jpg or not.
    
    move_uploaded_file($_FILES["file1"]["tmp_name"], $file1);
    echo "The files has been uploaded";
    
}else{
    echo "JPG is only allowed to uploded";
    
}



?>