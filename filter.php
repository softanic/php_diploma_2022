<?php
//SESSION_START();
//$_SESSION['user']="prasad";

//print_r($_COOKIE);
$name="<h1>prasad</h1>";
addcslashes($name);
$name=filter_var($name,FILTER_SANITIZE_MAGIC_QUOTES);
echo $name;


/*
?>

FILTER_VALIDATE_BOOLEAN, FILTER_VALIDATE_BOOL	
FILTER_VALIDATE_DOMAIN
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT	
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_NUMBER_FLOAT
FILTER_SANITIZE_NUMBER_INT	
FILTER_SANITIZE_SPECIAL_CHARS	
FILTER_SANITIZE_STRING
FILTER_SANITIZE_URL	






$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<h1>demo</h1>";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);


<?php
*/
?>