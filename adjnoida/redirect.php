<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
$file = $_GET['file'];
$file = str_replace($root, '', $file);
$file = str_replace('\\', '/', $file);

header("Location: http://localhost{$file}");

?>