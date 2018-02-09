<?php
require_once('autoload.inc.php');
use Dompdf\Dompdf;

function file_get_contents_curl($url)
{
 $ch = curl_int();
 curl_setopt($ch, CURLOPT_HEADER, 0);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_URL, $url);
 $data=curl_exec($ch);
 curl_close($ch);
 return $data;
}
$html=file_get_contents("reporte.php");
$pdf= new DOMPDF();
$pdf->set_paper("letter","potrait");
$pdf->load_html(utf8_decode($html));
$pdf->render();
$pdf->stream('reporte.pdf');

?>