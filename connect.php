<?php
$FirstName = $_POST['fname'];
$LastName =  $_POST['lname'];
$Registration = $_POST['reg'];
$Email = $_POST['email'];
$Mobile =  $_POST['mobile'];
$Gender =  $_POST['gender'];
$Year =  $_POST['year'];
$UserName =  $_POST['uname'];
$Password =  $_POST['password'];

$conn = new mysqli('localhost','root','','reunion');
if ($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into Registration(FirstName,LastName,Registration,Email,Mobile,Gender,Year,UserName,Password)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss",$FirstName,$LastName,$Registration,$Email,$Mobile,$Gender,$Year,$UserName,$Password);
    $stmt->execute();
   
    echo"Registration To Norton Hooks Community Successful...";
    
}?>