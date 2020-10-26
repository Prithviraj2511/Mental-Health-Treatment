<?php

$data = json_decode( file_get_contents('php://input') ,1);


$user_agent= $data[0]['value'];
$language= $data[1]['value'];
$color_depth= $data[2]['value'];
$device_memory= $data[3]['value'];
$hardware_concurrency= $data[4]['value'];
$timezone_offset= $data[7]['value'];

$cpu_class= $data[12]['value'];
$navigator_platform= $data[13]['value'];
$canvas= $data[15]['value'];
$webgl= $data[16]['value'];
$webgl_vendor= $data[17]['value'];
$adblock= $data[18]['value'];

$has_lied_languages= $data[19]['value'];
if($has_lied_languages["value"] === TRUE){
        $has_lied_languages = "True";
}    else{
         $has_lied_languages = "False";}
$has_lied_resolution= $data[20]['value'];
if($has_lied_resolution["value"] === TRUE){
        $has_lied_resolution = "True";
}    else{
         $has_lied_resolution = "False";}
$has_lied_os= $data[21]['value'];
if($has_lied_os["value"] === TRUE){
        $has_lied_os = "True";
}    else{
         $has_lied_os = "False";}
$has_lied_browser= $data[22]['value'];
if($has_lied_browser["value"] === TRUE){
        $has_lied_browser = "True";
}    else{
         $has_lied_browser = "False";}
$audio_fp= $data[25]['value'];




$regular_plugins= $data[14]['value'];
echo count($regular_plugins);

