<?php
header('Content-type','text/plain');

$host = $_SERVER['HTTP_HOST'];
$dir = dirname($_SERVER['PHP_SELF']);
$in = 'index.php';

header("Location: http://$host$dir/$in");