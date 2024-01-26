## File Uploading

#### Example 1

##### Index PHP

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>
     
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
        
    </body>
</html>

```

##### Upload PHP

```PHP
<?php

$anyfile='files/' . basename($_FILES["file1"]["name"]);//Uploading file path name and name stored in this ariable.This is like a location.
move_uploaded_file($_FILES["file1"]["tmp_name"],$anyfile);

//basename is the path name. 
//$_FILES[""] is a superglobal method to acesses uploading files.
//files/ is the folder where we want to upload
//move_uploaded_file() method is use to upload the file to the server.
//It takes two parameters first when we upload the file we need to send the tmp_name with the file,second is the palce.
?>

```
#### OutPut 
![Example 5.1](../../0-media/5-1.gif)

#### Example 2

##### Index PHP

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
      
    </body>
</html>

```

##### Upload PHP

```PHP
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
```
#### OutPut 
![Example 5.2](../../0-media/5-2.gif)

#### Example 3

##### Index PHP

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
        
    </body>
</html>

```

##### Upload PHP

```PHP
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
```
#### OutPut 
![Example 5.3](../../0-media/5-3.gif)

#### Example 4

##### Index PHP

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>
     
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
      
    </body>
</html>

```

##### Upload PHP

```PHP
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
```
#### OutPut 
![Example 5.4](../../0-media/5-4.gif)

#### Example 5

##### Index PHP

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>
     
        <form action="upload.php" method="post" enctype="multipart/form-data">
                    
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
        
    </body>
</html>

```

##### Upload PHP

```PHP
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
```
#### OutPut 
![Example 5.5](../../0-media/5-5.gif)

#### Example 6

##### Index PHP

```HTML
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
        
    </body>
</html>

```

##### Upload PHP

```PHP
<?php

$file=basename($_FILES["file1"]["name"]);

if($_FILES["file1"]["size"]>1000000){//This application olny allowed less than 1 mb.
    
    echo "Too large should be less than 1mb";
    
}else{
    
    move_uploaded_file($_FILES["file1"]["tmp_name"], $file);
    
}

?>
```
#### OutPut 
![Example 5.6](../../0-media/5-6.gif)

#### Example 7

##### Index PHP

```PHP
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is the title</title>

    </head>
    <body>
     
        <form action="upload.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="file1" id="file1">
            <input type="submit" name="subBtn1">
            
        </form>
    
    </body>
</html>

```

##### Upload PHP

```PHP
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
```
#### OutPut 
![Example 5.7](../../0-media/5-7.gif)
