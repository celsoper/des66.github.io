<?php

$myemail  = "your@email.com";

/* Check all form inputs using check_input function */
$firstname = check_input($_POST['firstname'], "Enter your first name");
$lastname = check_input($_POST['lastname'], "Enter your last name");
$emailaddress  = check_input($_POST['emailaddress'], "Enter your e-mail address");

/* This is the subject of the e-mail */
$subject = "$firstname $lastname has submitted information";

/* This is the message for the e-mail */
$message = "Hello!

First Name: $firstname
Last Name: $lastname
E-mail Address: $emailaddress

End of message
";
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks/thanks.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
function show_error($myError)
{
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
<title>Error!</title>
		<meta charset="UTF-8">
</head>

    <body>Error!</body>
</html>

<?php
exit();
}
?>

