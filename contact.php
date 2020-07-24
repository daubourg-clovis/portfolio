<?php 



if(isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $toEmail ='clovis.daubourg@gmail.com';
    $mailHeader = 'From :' .$name. "<" .$email.">/r/n";
    if(mail($toEmail, $subject, $message, $mailHeader)){
        $display = "Your message has been sent";
    }
}