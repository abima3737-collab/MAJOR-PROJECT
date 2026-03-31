<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "yourmail@gmail.com";   // unga mail id
$subject = "New Contact Form Message";

$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "Message Sent Successfully!";
}else{
    echo "Error sending message";
}

}
?>