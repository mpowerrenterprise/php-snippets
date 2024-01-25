<?php

$anyfile='files/' . basename($_FILES["file1"]["name"]);//Uploading file path name and name stored in this ariable.This is like a location.
move_uploaded_file($_FILES["file1"]["tmp_name"],$anyfile);


//basename is the path name. 
//$_FILES[""] is a superglobal method to acesses uploading files.
//files/ is the folder where we want to upload
//move_uploaded_file() method is use to upload the file to the server.
//It takes two parameters first when we upload the file we need to send the tmp_name with the file,second is the palce.
?>
