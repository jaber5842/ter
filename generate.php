<?php
//prevent, if not submit
if(!isset($_POST['name'])) dir();

$name =$_POST['name'];
$color = $_POST['color'];
$favMovie = $_POST['favMovie'];
$reason = $_POST['reason'];
$frameLang = $_POST['frameLang'];
$comment = $_POST['comment'];




	//$request = array('bizName' => $_POST['bizName'], 'address' => $_POST['address'], 'EIN' => $_POST['EIN'], 'DUNS' => $_POST['DUNS'], 'progCateg' => $_POST['progCateg'], 'bleh1' => $_POST['bleh1'], 'textbox' => $_POST['textbox'] );

//include template

ob_start();
require_once('pdf-template/welcome.php');
$template = ob_get_clean();


//include dompdf library
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;

//using pdf dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($template);

//set paper size
$dompdf->setPaper('A4', 'portrait');

//Render the html to pdf
$dompdf->render();

//output to browswer
$dompdf->stream('message-' .time());

//write pdf to directory
file_put_contents('pdfs/message-' .time().'.pdf', $dompdf->output());


