<?php

include_once ($_SERVER['DOCUMENT_ROOT']."/Hasib/crud/config.php");
use Hasib\Banner;

$_banner = new Banner();
$_banner->delete();

?>