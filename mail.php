<!-- Change the recieving mail address in constant.php -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmail/vendor/autoload.php';
if($_POST)
{
require('constant.php'); //constant.php has all the recieving snd sending mail address
    
    $user_name = filter_var($_POST["name"], FILTER_SANITIZE_EMAIL); //store email from form data
    $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); //store email from form data
	$msg = filter_var($_POST["msg"], FILTER_SANITIZE_STRING); //store message from form data
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';  //get IP address of person submitting form data
	

   $mail = new PHPMailer(true);  
    //   $mail->SMTPDebug = 0;                               
       $mail->isSMTP();
       $mail->SMTPAuth = true;    
       $mail->SMTPSecure = 'ssl';
       $mail->Port = 465;          
      $mail -> Host = HOST; //start of data getting called from constant.php
       $mail->Username = USERNAME;        
       $mail->Password = PASSWORD; //end of data getting called from constant.php
       $mail->From = $user_email;  
       $mail->FromName = $user_name; //sends mail with sender name as the name inputted in the form 
       $mail->addAddress(RECIPIENT_MAIL,RECIPIENT_MAIL_NAME); //this gets called from constant.php
       $mail->isHTML(true);
       $mail->Subject = "A response from website!"; //subject of mail
       $mail->Body = "Website form response :\n\n<br>".   //mail body starts here
                     "Name: $user_name \n\n<br>".   
                     "Email: $user_email \n\n<br>".      
                     "Message: \n\n <br>".    "$msg\n\n<br>".   
                     "IP: $ip\n"; //mail body ends here
        $mail->AltBody = "This is the plain text version of the email content"; //Alt body of mail
        if (!$mail->send()) {
            //error sending form, go to error page
            header("Location: error.html");
             exit;
        } else {
            //form data sent to email successfully, go to thank you page
            header("Location: thank-you.html");
	        exit;
        }
}
?>