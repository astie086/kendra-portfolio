<?php

    // set up variables //

    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $message = $_POST ['message'];

    // what to do when you get the items and what is going to be sent in the message//

    $email_from = 'Site Contact';
    $email_subject = 'New Message!';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    // where is it going? //

    $to = "astie086@gmail.com";
    $header = "From: $email_from \r\n";
    $header .= "Reply-To: $email \r\n";

    //what should mail do?//

    mail($to,$email_subject,$email_body,$headers);

    //once submitted where does that page take them?//

    header("location: index.html");

?>
