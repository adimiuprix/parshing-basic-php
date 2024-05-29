<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$data = http_request("https://api.bscscan.com/api?module=stats&action=bnbprice&apikey=I2EQPRCMPFYR9BI6WHKP5E1I9NWS42K9HA");

// ubah string JSON menjadi array
$profile = json_decode($data, TRUE);
?>