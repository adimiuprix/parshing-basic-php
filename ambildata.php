<?php
 //ambil data json dari file
  $data=file_get_contents("data.json");

  //mengubah standar encoding
  $ubah=utf8_encode($data);

  //mengubah data json menjadi data array asosiatif
  $hasil=json_decode($ubah,true);

  //looping data menggunakan foreach
  foreach ($hasil as $nilai) {
   echo "NIM : ".$nilai['nim']."<br>";
   echo "Nama : ".$nilai['nama']."<br>";
   echo "Alamat : ".$nilai['alamat']."<br>";
   echo "Jurusan : ".$nilai['jurusan']."<br>";

   //karena data Mk didalam array, maka ambil data menggunakan foreach
   foreach ($nilai['MK'] as $MK) {
    # code...
    echo "Kode Mata Kuliah : ".$MK['mk_kode']."<br>";
    echo "Nama Mata Kuliah : ".$MK['nama_mk']."<br>";
   }
  }
?>