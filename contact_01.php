<?
parse_str($HTTP_POST_VARS);
$name1 = $_POST['name1'];
$email= $_POST['email'];
$comments= $_POST['comments'];



$myemail = "jimh@educator.com";
$headers = "From: $email\r\n";
$subject = "Contact from educator.com";

$body = 
"Name:\t".$name."\n\n".
"Email:\t".$email."\n\n".
"Comments:\t".$comments."\n\n";

//print $body;
mail($myemail, $subject, $body, $headers);
Header("Location: thankyou.html");
?>

