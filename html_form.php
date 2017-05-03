<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 4/26/2017
 * Time: 3:15 PM
 */
require_once('vendor/autoload.php');
require_once('core_code.php');
require_once('smtp_variables.php');

$core = new core_code();

$patern = '/netamount_.*/';
$stuffArray =  $core->preg_grep_keys($patern, $_POST);
$keyNumbers = $core->get_amount_number($stuffArray);

$arraySet = $core->get_array_amount_value($keyNumbers);

//GETTING POST ARRAYS
$company = $_POST['company_name'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$city = $_POST['city'];
$state = $_POST['state'];
$vat_number = $_POST['vat_number'];
$company_number = $_POST['company_number'];
$invoice_number = $_POST['invoice_number'];
$dates = $_POST['date'];
$currency = $_POST['currency'];
$total_amount = $_POST['total_amount'];
$note = $_POST['note'];

$pdf = '';

try
{
    // init HTML2PDF
    $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array(0, 0, 0, 0));

    // display the full page
    $html2pdf->pdf->SetDisplayMode('fullpage');

    // get the HTML
    ob_start();
    include('invoice_html.php');
    $content = ob_get_clean();

    // convert
    $html2pdf->writeHTML($content);

    // send the PDF
    $pdf = $html2pdf->Output('', true);

}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = '0';
$mail->SMTPSecure = $secure;
$mail->Host = $host;
$mail->Port = $port;
$mail->SMTPAuth = $auth;
$mail->Username = $user;
$mail->Password = $password;
$mail->setFrom('sender_email@yahoo.com', 'sender_name');
$mail->addAddress('receiver_email@gmail.com', 'receiver_name');
$mail->Subject = 'Subject';
$mail->addStringAttachment($pdf, 'File_name.pdf');
$mail->Body = 'Subject';

if($mail->send())
{
    echo 'success';
}
else
{
    echo $mail->ErrorInfo;
}