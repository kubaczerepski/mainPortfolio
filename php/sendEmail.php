<?php
    $title = $_POST['emailTitle'];
    $contact = $_POST['emailContact'];
    $text = $_POST['emailText'];
    $toEmail = "contact@kubaczerepski.pl";
    if(mail($toEmail,$title,$text)){
        header("location:../html/emailSuccess.html");
    }else{
        header("location:../html/emailFailed.html");
    }
?>