<?php



//------------Create Connection-----

$conn = new mysqli('localhost','root','','contact');
//---------Check connection--------------

if($conn->connect_error){
    die('Connection fails'.$conn->error);
}
else{

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $msg = mysqli_real_escape_string($conn,$_POST['message']);

    $sql =" INSERT INTO message (Name,Email,Message) values ('$name','$email','$msg')";

    if($conn->query($sql)){
        echo"Message has been Sent";
    }
    else{
        echo"Somethings wrong.Try again later! ";
    }

    $conn->close();




}


?>