<?php
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

//snappy
use Knp\Snappy\Pdf;
$snappy = new Pdf('C://"Program Files"/wkhtmltopdf/bin/wkhtmltopdf.exe');
header('Content-type', 'application/octect-stream');
header('Content-Disposition: attachment; filename="file.pdf"');
header('Content-Transfer-Encoding', 'binary');
// echo $snappy->getOutput('http://www.google.co.uk');
$snappy->setOption('no-outline', true);
$snappy->setOption('page-size','LETTER');
$snappy->setOption('encoding', 'UTF-8');

$abc = load_template_to_string('mailtemp.php');
$pdf_data = $snappy->getOutputFromHtml($abc);


// // Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
// $mpdf = new mPDF('utf-8', 'A4', 0, '', 0, 0, 0, 0, 0, 0); // New PDF object with encoding & page size
// // 'utf-8', 'A4', 0, '', 0, 0, 0, 0, 0, 0
// // $stylesheet = file_get_contents('css/form.css'); // Get css content

// // $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($abc);

//  //save to server
// //  $mpdf->Output("uploads/".$uniqid."-".$unn.".pdf",'F');
//  //send to mail
// $content = $mpdf->Output('', 'S');



// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
->setUsername('hicinkollc@gmail.com')
->setPassword('Hicinkollc@123')
->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)));
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
// Create instance of Swift_Attachment with our PDF file

$attachment = new Swift_Attachment($pdf_data, 'cheap_flight_options.pdf', 'application/pdf');

$message = (new Swift_Message())

  // Give the message a subject
  ->setSubject('Flight options as per your preference')

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


