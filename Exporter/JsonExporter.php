<?php
namespace Exporter;
include "autoload.php";
class JsonExporter extends Exporter{
    public function export()
    {
        $format = ".json";
        $filename=__DIR__ . "/files/json-file-" . rand(99,999) . "$format";
        file_put_contents($filename,json_encode($this->data));
    }
}