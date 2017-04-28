<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 4/26/2017
 * Time: 3:15 PM
 */

require_once('core_code.php');
require_once('vendor/spipu/html2pdf/html2pdf.class.php');

$core = new core_code();
$pdf_convert = new HTML2PDF();

$patern = '/netamount_.*/';
$stuffArray =  $core->preg_grep_keys($patern, $_POST);
$keyNumbers = $core->get_amount_number($stuffArray);

$arraySet = $core->get_array_amount_value($keyNumbers);
print_r($_POST);