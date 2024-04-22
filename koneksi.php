<?php

//Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "web_monitoring_pekerja";

//buat Koneksi
$koneksi = mysqli_connect("$server","$user","","$database") or die(mysqli_error($koneksi));

?>