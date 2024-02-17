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
    public function is_valid()
    {
          foreach($this->data as $field){
            if(empty($field)){
                return false;
            }
          }
        return true;
    }
    public abstract function export();
}