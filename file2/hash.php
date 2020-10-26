<?php

$data = json_decode( file_get_contents('php://input') ,1);
$browser= $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];

setcookie("hash", $data);
echo $data;