<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['mail'];
$message = $_POST['message'];
$telephone = $_POST['phone'];

$to = "zuns086@gmail.com";
$subject = "Mail From Zahid'Web ";

$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Phone No: =" . $telephone;

$headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";

if ($name != '' && $email != '' && $message != '' && $telephone != '') {
    //  To redirect form on a particular page
    header("Location:index.html");
} else {
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!"; ?></span> <?php

}
                                                                        
                                                                        
?>