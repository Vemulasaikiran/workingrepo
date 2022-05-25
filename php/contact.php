<?php


if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];


    $mailTO ="info@cjsstechnologies.com";

    $headers = "From: ".$mailFrom;
    $txt="You Have received an e-mail through Website from".$name.".\n\n".$message;


    mail($mailTO, $subject, $txt, $headers);
    header("Location: index.html?mailsend")
    

}


?>