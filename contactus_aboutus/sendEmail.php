<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/SMTP.php";

if(isset($_POST['submit'])){
    $name=$_POST['name']; 
    $lname=$_POST['lname'];
    $phone=$_POST['phone']; 
    $email=$_POST['email'];  
    $message=$_POST['message']; // Get Message Value
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 3;    

    $mail->isSMTP();            
                         
    $mail->Host = "smtp.gmail.com";

    $mail->SMTPAuth = true;           
  
    $mail->Username = "mailerforthresholdgaming@gmail.com";                 
    $mail->Password = "webdev@project";  

    $mail->SMTPSecure = "tls";      

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