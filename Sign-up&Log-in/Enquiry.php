<?php
    $Name = $_POST['name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Message = $_POST['Text'];

    $email_form = 'IIT-NIT-Counseeling.com';
    $email_subject = 'New Form Submission';
    $email_body =
     "User Name: $Name.\n".
        "User Email: $Email.\n".
     "User Phone Number: $Number.\n".
        "User Message: $Message.\n".
    $to = "iitnit.engcounselling@gmail.com"
    $headers = "From: $email_form \r\n";
    $headers = "Reply-To: $Email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: Enquiry.html");
      
?>