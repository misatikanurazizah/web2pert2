<?php
class mobil0026{
    var string $nama;
    var string $brand;
    var int $tahun;

    function __construct(string $nama, string $brand, int $tahun)
    {
        $this->nama = $nama;
        $this->brand = $brand;
        $this->tahun = $tahun;
    }
    function infomobil0026() {
        return "Nama Mobil : $this->nama <br>"
        . "Brand : $this->brand <br>"
        . "Tahun : ".$this->tahun."<br>";
    }
}


?>