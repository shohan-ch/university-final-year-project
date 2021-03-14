<?php

$conn = new mysqli('localhost','root','','contact');

if(!$conn){
    die('connection error'.$conn->error);
}
else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql ="INSERT INTO message (Name,Email,Message) VALUES ('$name','$email','$message')";

    if($conn->query($sql)){
        echo"Message Sent";
    }
    else{
        echo"Something wrong.Try again ";
    }
    $conn->close();
}










?>