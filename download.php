<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = "
<h1>{$_POST['name']}</h1>
<p>Email: {$_POST['email']}</p>
<p>Phone: {$_POST['phone']}</p>

<h2>Education</h2>
<p>{$_POST['education']}</p>

<h2>Skills</h2>
<p>{$_POST['skills']}</p>

<h2>Experience</h2>
<p>{$_POST['experience']}</p>
";

$dompdf->loadHtml($html);

$dompdf->setPaper('A4','portrait');

$dompdf->render();

$dompdf->stream("cv.pdf");

?>