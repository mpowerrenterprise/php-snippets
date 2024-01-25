<?php
$place="files/";//this the directory.
$file1=$place. basename($_FILES["file1"]["name"]);

$upload=0;

if($_POST["subBtn1"]){
    
    $checkImg= getimagesize($_FILES["file1"]["tmp_name"]);//check weather it is image or not.
    
    if($checkImg==true){//if it is
        
        $upload=1;//$upload will set to 1;
        
    }else{//otherwise.
        
        echo "It is not an image "."<br>";
                $upload=0;//Set to 0.
        
    }
    
    if($upload==1){//if the $uploaed==1 run this block  of code bellow.
        
        move_uploaded_file($_FILES["file1"]["tmp_name"], $file1);
        echo "The file has been uploaded";
        
    }else{//Otherwise do this 
        
        echo "The has not been uploaded";        
    }
    
    
    
}





?>