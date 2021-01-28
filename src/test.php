<?php

require_once __DIR__ . '/../vendor/autoload.php';

$file = file_get_contents(__DIR__.'/1.php', false, null);

$mpdf = new \Mpdf\Mpdf([
	'tempDir' => __DIR__ . '/temp',
	'default_font' => 'Times New Roman',
	'mode' => 'utf-8', 'format' => 'B5'
]);
$mpdf->WriteHTML($file);
$mpdf->Output('test.pdf', \Mpdf\Output\Destination::FILE);