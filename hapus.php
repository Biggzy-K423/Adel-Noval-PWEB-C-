<?php

require 'koneksi.php';

if(isset($_GET['proses']) and $_GET['proses'] == 'remove'){
    hapus();
}

function hapus()
{
    
    global $con;
    $id = $_GET['ID_Pelanggan'];

    // $query = "SELECT sp FROM usertopup WHERE ID_Pelanggan = '$id'";
    // $result = mysqli_query($con, $query);
    // $data = mysqli_fetch_assoc($result);

    // Menghapus data dari tabel
    $query = "DELETE FROM usertopup WHERE ID_Pelanggan=".$id;
    $eksekusi = mysqli_query($con, $query);

    if ($eksekusi) {
        // if ($sp !== "null") {
        //     unlink('uploads/' . $sp);
        // }
            echo '<script> 
            alert("Berhasil Terhapus"); 
            window.location.href = "routes.php?route=dashboardadmin";
        </script>';
    } else {
        echo '<script> 
            alert("Gagal Terhapus"); 
            window.location.href = "routes.php?route=dashboardadmin";
        </script>';
    }
}

