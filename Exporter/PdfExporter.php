<?php
namespace Exporter;
include "autoload.php";
class PdfExporter extends Exporter{
    public function export()
    {
        $format=".pdf";
    }
}