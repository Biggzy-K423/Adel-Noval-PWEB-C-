<?php 

$Pelanggan = null;
$Pelanggan_error = null;
$Nomor_Hp = null;
$Nomor_Hp_error = null;
$Perkiraan_Selesai = null;
$success = null;

if(isset( $_POST['Create'])){

    $Pelanggan = $_POST['Pelanggan'];
    $Nomor_Hp = $_POST['o_hp'];
    $Perkiraan_Selesai = $_POST['no_hp'];
    $no_hp = $_POST['no_hp'];
    $nama_guru = $_POST['nama_guru'];

    if(empty(trim($no_hp))) {
         $no_hp_error = "Masukkan No Handphone";
    } else {
        if(empty(trim($nama_guru))) {
             $nama_guru_error = "Masukkan Nama Guru";
        } else {
             $success = "Data Telah Ditambahkan ";
        }
    }

}


?>