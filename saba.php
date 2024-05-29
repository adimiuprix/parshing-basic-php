<?php
    $hero ='[
        {
            "nama": "Lumine",
            "level": 20
        },
        {
            "nama": "Diona",
            "level": 10
        }
    ]';

    $data= json_decode($hero);

    foreach ($data as $value) {
        echo "Nama: {$value->nama} <br>";
        echo "Level: {$value->level} <br><br>";
    }

    $customer= [
        "Nama" => "Andhika",
        "Alamat" => "Jakarta"
    ];

    $data= json_encode($customer);
    echo $customer["Nama"];

    echo $data;
    