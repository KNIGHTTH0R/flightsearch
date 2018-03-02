<?php
// require composer autoload
require '../../vendor/autoload.php';

$aname=$_POST['aname'];
$name=$_POST['name'];
$email=$_POST['email'];
$str = json_decode($_POST['wah'], true); 

function load_template_to_string($file_name) {
  ob_start();
  include $file_name;
  return ob_get_contents();
   
}

$abc = load_template_to_string('d.php');

// // Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
// $mpdf = new mPDF(); // New PDF object with encoding & page size
// // $stylesheet = file_get_contents('mail.css'); // Get css content
// // $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML(utf8_encode($abc));
// // $content = $mpdf->Output('', 'S');
// $mpdf->Output('MyPDF.pdf', 'D');








// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
->setUsername('hicinkollc@gmail.com')
->setPassword('Hicinkollc@123')
->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)));
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
// Create instance of Swift_Attachment with our PDF file

$attachment = new Swift_Attachment($content, 'hicinko_booking.pdf', 'application/pdf');

$message = (new Swift_Message())

  // Give the message a subject
  ->setSubject('Thanks for choosing us , here is your authorization receipt')

  // Set the From address with an associative array
  ->setFrom(['info@hicinko.com' => 'Hicinko Compliance Team'])

  // Set the To addresses with an associative array (setTo/setCc/setBcc)
  ->setTo($email)
// ,'hicinkollc'=>'info@hicinko.com'
  // Give it a body
  ->setBody($abc, 'text/html')
  ->attach($attachment)
  ;

// Send the created message
$mailer->send($message);
