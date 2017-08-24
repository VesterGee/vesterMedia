<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];

$to = 'vestergee3@gmail.com';
$subject = 'Contact form Results';
$message = 'Name: '.$name. "\r\n". 'Email:

$header = 'From: '. $name . '<' . $email. '>' . "\r\n" . 'Reply-To: '.$email . "\r\n". 'X-Mailer: PHP/'.phpversion();


$check1 = strpos($email, '@', 1);
if($check1 == true)
{
$check2 = strpos($email, '.', 4);
if($check2 == true)
{
if(mail($to,$subject,$message,$header))
echo "Email sent successfully!";
else
echo "Email Sending Failed!";
}else{
echo "The email address you entered is invalid!";
}
 
}else{
echo "The email address you entered is invalid! Please Check it!";
}

?>