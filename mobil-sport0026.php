<?php
class mobilsports extends mobil0026 {
    public $turbo = false;

    function jalankanturbo(){
        $this->turbo = true;
        return "Jalankan Turbo!";
    }

    // Function overriding
    function infomobil0026() {
        return "Nama Mobil : $this->nama <br>"
        . "Brand : $this->brand <br>"
        . "Tahun : ".$this->tahun."<br>";
    }
}

?>