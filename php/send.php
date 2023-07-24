<?php 

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        $phoneNumber = $_POST['phoneNumber'];
        $websiteUrl = $_POST['websiteUrl'];
        $mailTo = "tomas.rodriguez.moyano@gmail.com";
        $header = "From: ".$name . "\r\n";
        $header =  "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = @mail($mailTo, "Message From: . $name", $message, $header);
    }
?> 
