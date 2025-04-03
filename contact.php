<?php 

if(isset($_POST['submit'])){
    $to = "hello@venquo.com"; // admin@cyberuppercut.com this is your Email address
    $cc = "hitu.24patel@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $date = $_POST['date'];
    $subject_text = $_POST['subject_text'];
    $subject = "Received Inquiry form Ghanshyam Overseas";
    $subject2 = "Copy of your form submission";

    $message = $fullname . " from " . $fullname . " wrote the following:" . "\n\n Full Name:" . $fullname . "\n\n Phone:" . $phone . "\n\n Email: " . $email . "\n\n Message: " . $subject_text;
    $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $subject_text . "\n\n Email: " . $email . "\n\n Doctor: " . $doctor . "\n\n Date: " . $date;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($cc,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo '<script>window.location.href = "index.html";</script>';
    exit();    

    }
?>