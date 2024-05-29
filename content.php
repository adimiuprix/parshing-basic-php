<?php

$data= file_get_contents('https://ustake.homes/dummy.json');
$data= json_decode($data);

// print_r($data);
foreach ($data as $user) {
    echo "ID: ".$user->data->id."<br>";
    echo "Email: ".$user->data->email."<br>";
    echo "Text: ".$user->support->text."<br><br><br>";

}