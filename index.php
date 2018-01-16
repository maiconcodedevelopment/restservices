<?php
header('Content-type','text/plain');

define('env',TRUE) or die(Exception::class);

$host = $_SERVER['HTTP_HOST'];
$dir = explode('/',dirname($_SERVER['PHP_SELF']))[1];
$in = 'index.php';

//header("Location: http://$host/$dir/$in");

$_SERVER['HTTP_ACCEPT_CHARSET'] = 'uft-8';