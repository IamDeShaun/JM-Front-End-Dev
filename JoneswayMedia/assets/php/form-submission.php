<?php
if(!isset($_POST['submit']))
{
//This page should not be accessed directly. Need to submit the form.
echo "error; you need to submit the form!";
}

//Email information
$to = "info@joneswaymedia.com";
$name = $_POST['name'];
$email = $_REQUEST['email'];
$message = $_POST['message'];
$subject = $_POST['subject']; 

$body = "From: $name\n E-Mail: $email\n Message:\n $message";
$headers = "From: " . $_REQUEST['email'] . "\n";

if($name !=''&& $email !=''&& $message !=''&& $subject !='')
{
// To redirect form on a particular page
header("Location:http://www.joneswaymedia.com");
}

//send email
mail($to, $subject, $body, $headers);
?>


<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $phone, $body, $from)) { 
        echo '<p>Thank you for your email!</p>';
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>
