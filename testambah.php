<?php
include('crudmhs.php');

$nim = '1937001';
$nama = 'taufiq';
$kelamin = 'L';
$jurusan = 'MI';

$hasil = tambahMhs($nim, $nama, $kelamin, $jurusan);
if($hasil > 0)
header("Location: bacamhs2.php");
else
echo 'Gagal menambah record';
?>