<?php
$data = file_get_contents("datademo.json");
$json = json_decode($data, TRUE);

echo $json[1]['username'];