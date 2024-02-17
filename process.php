<?php
include "autoload.php";
[$title,$content,$format] = [$_POST['title'],$_POST['content'],$_POST['format']];
$className = "Exporter\\{$format}Exporter";
$obj = new $className(["title"=>$title,"content"=>$content]);
$obj->export();