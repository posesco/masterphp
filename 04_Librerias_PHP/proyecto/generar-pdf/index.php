<?php 
require_once '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$html  = '<h1>Hola mundo desde una librerias de PHP para hacer PDFs</h1>';
$html .= '<p>Master en PHP</p>';

?>
