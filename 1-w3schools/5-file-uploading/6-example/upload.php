<?php

$file=basename($_FILES["file1"]["name"]);

if($_FILES["file1"]["size"]>1000000){//This application olny allowed less than 1 mb.
    
    echo "Too large should be less than 1mb";
    
}else{
    
    move_uploaded_file($_FILES["file1"]["tmp_name"], $file);
    
}

?>