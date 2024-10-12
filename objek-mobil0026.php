<?php
require_once "mobil-0026.php";
require_once "mobil-sport0026.php";

// Objek dari class mobil
$avanza = new mobil0053("Avanza","Toyota",2020);
echo $avanza->infomobil0026();

// Objek dari class mobilsport
$supra = new mobilsports("Supra","Toyota",2021);
echo $supra->infomobil0026();
echo $supra->jalankanturbo();
?>