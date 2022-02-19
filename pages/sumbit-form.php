<?php

$myemail  = "your@email.com";


$firstname = check_input($_POST['firstname'], "Enter your first name");
$lastname = check_input($_POST['lastname'], "Enter your last name");
$emailaddress  = check_input($_POST['emailaddress'], "Enter your e-mail address");


$subject = "$firstname $lastname has submitted information";


$message = "Hello!

First Name: $firstname
Last Name: $lastname
E-mail Address: $emailaddress

End of message
";



mail($myemail, $subject, $message);


header('Location: final-form.html');
exit();

