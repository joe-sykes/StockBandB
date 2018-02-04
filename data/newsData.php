<?php
$stock = "glencore";
$json_url = "https://newsapi.org/v2/everything?q=".$stock."&apiKey=55ee0c099d5945f1865f8013e34a41d6";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
echo "<pre>";
print_r($data);
echo "</pre>";

var_dump($data[2][0]['author']);
?>