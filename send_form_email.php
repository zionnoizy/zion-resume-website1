<?php
if(isset($_POST['email']){

    $to_my_email = "zionn951@gmail.com";
    $to_my_email_title = "sent from Zion Web:";

    if(!isset($_POST['mb_fullname']) ||
       !isset($_POST['mb_email']) ||
       !isset($_POST['mb_message'])){
       died('Please fillout your information') //need a function
    }


    $fullname = $_POST['mb_fullname'];
    $email = $_POST['mb_email'];
    $msg = $_POST['mb_message'];


    //email msg formating
    $email_msg .= "Full Name= ".clean_string($fullname);
    $email_msg //<-two more

    //additional header
    $headers = "";

    if(mail($to_my_email, $email_subject, $email_msg, $headers)){
        echo 'Email has sent successfully.';
    }else{
        echo 'Email sending failed.';
    }



}