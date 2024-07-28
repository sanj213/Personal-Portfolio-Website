<?php
 

  $name = $_POST['name'];
  $email =  $_POST['email'];
  $message = $_POST['message'];
  $subject = "Mail from Personal Website";

  $to = "adhsanj213@gmail.com";

  $headers = "From: ".$name. "\r\n" .
  $text = "Email received from ".$name ."\r\nEmail: " .$email ."\r\n
  Message: ". $message;

  if($email!=NULL){
    mail($to , $subject, $text, $headers);
  }



//   require "vendor/autoload.php";  

//   use PHPMailer\PHPMailer\PHPMailer;
//   use PHPMailer\PHPMailer\SMTP;

//   $mail = new PHPMailer(true);

//   $mail->isSMTP();
//   $mail->SMTPAuth = true;

//   $mail->Host = "smtp.gmail.com";
//   $mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;;
//   $mail->Port = 587;

//   $mail->username = "adhsanj213@gmail.com";
//   $mail->Password = "Sanj@2134";

//   $mail->setFrom($email,$name);
//   $mail->addAddress("adhsanj213@gmail.com","Sanjanaa");

//   $mail->Subject = $subject;
//   $mail->Body = $message;
//   $mail->send();

//   echo "email sent";







  

//   $mailTo = "adhsanj213@gmail.com";

//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//   /*
//   $contact->smtp = array(
//     'host' => 'example.com',
//     'username' => 'example',
//     'password' => 'pass',
//     'port' => '587'
//   );
//   */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
// ?>
