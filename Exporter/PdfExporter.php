<?php
namespace Exporter;

use Mpdf\Mpdf;

include "autoload.php";
include "vendor/autoload.php";
class PdfExporter extends Exporter{
    public function export()
    {
        $format=".pdf";
        $filename=__DIR__ . "/files/pdf-file-" . rand(99,999) . "$format";
        // $fname="pdf-file-" . rand(99,999) . "$format";
        // $dest = __DIR__ . "/files";
        $dt="title:" . $this->data['title'] . "\n contnet:" . $this->data['content'];
        $pdf=new Mpdf();
        $pdf->WriteHTML($dt);
        $pdf->Output($filename);

    }
}