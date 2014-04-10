<?php
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . "autoload.php";
$a = new PHP_LexerGenerator($_SERVER['argv'][1]);
?>