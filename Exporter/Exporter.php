<?php
namespace Exporter;
include "autoload.php";
interface Exportable{
    public function export();
}
interface Importable{
    public function import();
}
abstract class Exporter implements Exportable{
    protected $format;
    protected $data;
    public function __construct($data) {
        $this->data=$data;
        
    }
    public function is_valid($data)
    {
          foreach($data as $field){
            if(is_null($field)||empty($field)){
                return false;
            }
          }
        return true;
    }
    public abstract function export();
}