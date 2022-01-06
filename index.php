<?php

$servername="localhost";
$Username="root";
$password="";
$database="test";
$connection=mysqli_connect($servername,$Username,$password,$database);

if(!$connection){
echo "Failed";
}else{
echo "Pass";
}

$insert="INSERT INTO `myst`(`stdname`, `Fname`) VALUES
 ('[Hamza]','[Shahid]')";
 $insert="INSERT INTO `myst`(`stdname`, `Fname`) VALUES
 ('Hamza','Shahid')";
 $insert="INSERT INTO `myst`(`stdname`, `Fname`) VALUES
 ('Ali','Ahmed')";
$check=mysqli_query($connection,$insert);
if(!$check){
    echo "not inserted";
}else{
    echo "inserted";
}







?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>