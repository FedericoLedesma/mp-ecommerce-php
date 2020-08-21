<?php
$data = file_get_contents("/webhook.json");
$objects = json_decode($data, true);
 
foreach ($objects as $object) {
    echo '<pre>';
    print_r($object);
    echo '</pre>';
}
?>