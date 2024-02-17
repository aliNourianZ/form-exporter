<?php
namespace Exporter;
include "autoload.php";
class TextExporter extends Exporter{
    
    public function export()
    {
        $format = ".txt";
        $filename=__DIR__ . "/files/text-file-" . rand(99,999) . "$format";
        $dt="title:" . $this->data['title'] . "\ncontnet:" . $this->data['content'];
        file_put_contents($filename,$dt);
    }

}
// $obj=new TextExporter(["ali\n","coooo"]);
// $obj->export();