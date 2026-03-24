<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "data.php";

// ambil data
$nama = $_POST['nama'] ?? '';
$nim = $_POST['nim'] ?? '';
$alamat = $_POST['alamat'] ?? '';

// validasi
if ($nama == "" || $nim == "" || $alamat == "") {
    echo "Data tidak boleh kosong!";
    exit;
}

// buat object
$data = new Data($nama, $nim, $alamat);

// tampilkan hasil
echo $data->tampilData();
?>