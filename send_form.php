<?php 
if(isset($_POST['email'])){
    $to = "info@cpcicostarica.com"; // CFCI's e-mail
    $from = $_POST['email']; // sender's e-mail
    $name = $_POST['name'];
    $subject = "Website form submission";
    $message = "Name:" . $name . "\n\n" . "Message:" .$_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Thank you " . $name . ", we will contact you as soon as we can!  Gracias "
        . $name . ", le estaremos contactando a la mayor brevedad!";
    }
?>