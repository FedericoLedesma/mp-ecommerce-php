<?php
$data = file_get_contents("/webhook.json");
$objects = json_decode($data, true);
 $json=json_encode($objects);
echo $json;
?>