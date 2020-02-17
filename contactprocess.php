<?php

if (isset($_POST['submit'])) {
    $to = "sameerawijekoon2202@gmail.com"; // this is your Email address 
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Customer Name :" . $name . "\n\n" . " " . "Contact Number :" . $contact . "\n\n" . "Message :" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    echo "('contact.html')"; //to redirect to another page.
    header("Location:contact.php");
}
?> 