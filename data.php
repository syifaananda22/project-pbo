<?php
class Data {
    public $nama;
    public $nim;
    public $alamat;

    public function __construct($nama, $nim, $alamat) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->alamat = $alamat;
    }

    public function tampilData() {
        return "Nama: " . $this->nama . "<br>" .
               "NIM: " . $this->nim . "<br>" .
               "Alamat: " . $this->alamat;
    }
}
?>