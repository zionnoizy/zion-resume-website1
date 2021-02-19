<?php
require_once ('send_form_email.php'); // OK
print "Script"

if(isset($_POST['send_btn']){

    $to_my_email = "test@gmail.com";
    $to_my_email_title = "sent from Zion Web:";

    if(!isset($_POST['mb_fullname']) ||
       !isset($_POST['mb_email']) ||
       !isset($_POST['mb_message'])){
       died('Please fillout your information') //need a function
    }


    print $_POST['mb_fullname'];
    $fullname = $_POST['mb_fullname'];
    $email = $_POST['mb_email'];
    $msg = $_POST['mb_message'];


    //email msg formating
    //$email_msg .= "Full Name= ".clean_string($fullname);
    $email_msg = "TESTING ZION ZION"; //<-two more

    //additional header
    $headers = "FROM:TEST@TEST.COM";

    $time = time();
    bool flag = mail($to_my_email, $email_subject, $email_msg, $headers);

    if(flag){
        echo 'Email has sent successfully.';
    }else{
        echo 'Email sending failed.';
    }

    print "Run $time";
}

else{
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
}
?>