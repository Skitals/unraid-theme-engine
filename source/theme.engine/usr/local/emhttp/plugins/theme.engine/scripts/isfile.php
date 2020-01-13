<?php
$file = $_GET["file"];
if(is_file($file)) { echo "file exists"; }
?>