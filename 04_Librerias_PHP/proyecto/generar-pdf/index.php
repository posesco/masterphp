<?php 
require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$html  = '<h1>Hola mundo desde PHP hacia creador de PDFs</h1>';
$html .= '<p>Parrafo ..</p>';
$html .= '<p>Parrafo ..</p>';
$html .= '<p>Parrafo ..</p>';
$html .= '<p>Parrafo ..</p>';
$html .= '<p>Parrafo ..</p>';
$html .= '<p>Parrafo ..</p>';
$html .= '<p>Parrafo ..</p>';
$html2pdf->writeHTML($html);
$html2pdf->output();

?>
