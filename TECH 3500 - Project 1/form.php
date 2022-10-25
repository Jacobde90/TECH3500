<?php 
if (isset($POST['submit'])) {
    $name = $POST['fname'];
    $email = $POST['fname'];
    $message = $POST['fname'];
   
    $mailTo = "jacobde@kean.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name."./n/n" .$message;

    mail($mailTo, $message, $headers);
}
?>