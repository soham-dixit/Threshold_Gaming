<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/SMTP.php";

if(isset($_POST['submit'])){
    $name=$_POST['name']; // Get Name value from HTML Form
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];  // Get Mobile No
    $email=$_POST['email'];  // Get Email Value
    $message=$_POST['message']; // Get Message Value
      
    $mail = new PHPMailer(true);

    //Enable SMTP debugging.
    $mail->SMTPDebug = 3;    

    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            

    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";

    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;           

    //Provide username and password     
    $mail->Username = "mailerforthresholdgaming@gmail.com";                 
    $mail->Password = "webdev@project";  

    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";      

    //Set TCP port to connect to
    $mail->Port = 587;                                   

    $mail->From = ($email);
    $mail->FromName = $name;

    $mail->addAddress("thresholdgaminghelp@gmail.com", "Threshold Gaming Community");

    $mail->isHTML(true);

    $mail->Subject = "A message from $name $lname";
    $mail->Body = "<i>Sender E-Mail address: $email <br><br> Message: $message <br><br>Phone number: $phone</i>";

    try {
        $mail->send();
        echo "Message has been sent successfully";

        header('Location: contactus_success.php');

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    }
?>