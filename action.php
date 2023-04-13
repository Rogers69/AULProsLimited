<?php
    include 'database.php';

    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="INSERT INTO users(Name, Subject, Email, Message) VALUES('$name', '$subject', '$email', '$message')";
    $result=mysqli_query($conn, $sql);

    if($result){
        header('Location: ./contact.html');
    }

?>