<?php
include 'koneksi.php'; // Sertakan file koneksi.php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Pelanggan = $_POST['Pelanggan'];
    $Kategori_Game = $_POST['Kategori_Game'];
    $Nomor_Hp = $_POST['Nomor_Hp'];
    $Perkiraan_Selesai = $_POST['Perkiraan_Selesai'];
    $Status = $_POST['Status'];

    // Periksa apakah file telah diunggah
    if(isset($_FILES["bukti_tf"])) {
        $Bukti_tf = $_FILES["bukti_tf"]["name"];
        $lokasi = $_FILES["bukti_tf"]["tmp_name"];
        
        // Pindahkan file yang diunggah ke folder tujuan
        move_uploaded_file($lokasi, "gambar/" . $Bukti_tf);
    } else {
        // Handle jika tidak ada file yang diunggah
        $Bukti_tf = ""; // atau nilai default lainnya
    }
    
    // Persiapkan query SQL dengan placeholder (?)
    $sql = "INSERT INTO usertopup (Pelanggan, kategori_Game, Nomor_Hp, Perkiraan_Selesai, status, Bukti_tf) VALUES (?,?,?,?,?,?)";
    
    // Persiapkan statement SQL
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssss", $Pelanggan, $Kategori_Game, $Nomor_Hp, $Perkiraan_Selesai, $Status, $Bukti_tf);
    
    // Eksekusi query
    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan.";
        $stmt->close();
        $con->close();
        header("Location:routes.php?route=dashboardadmin");
        exit();
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $con->close();
    }
}





// include 'koneksi.php';

// // Check if the file upload was successful
// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['gambar'])) {
//     if (
//         isset($_POST['Pelanggan']) &&
//         isset($_POST['Kategori_Game']) &&
//         isset($_POST['Tanggal_Masuk']) &&
//         isset($_POST['Perkiraan_Selesai']) &&
//         isset($_POST['Status']) &&
//         isset($_POST['Nomor_Hp']) &&
//         isset($_POST['Bukti_tf'])
//     ) {
//         // Mengambil data dari form
//         $Pelanggan = $_POST['Pelanggan'];
//         $Kategori_Game = $_POST['Kategori_Game'];
//         $Tanggal_Masuk = $_POST['Tanggal_Masuk'];
//         $Perkiraan_Selesai = $_POST['Perkiraan_Selesai'];
//         $Status = $_POST['Status'];
//         $Nomor_Hp = $_POST['Nomor_Hp'];
//         $Bukti_tf = $_FILES['Bukti_tf'];

//         if ($Bukti_tf['error'] === UPLOAD_ERR_OK) {
//             $tmpFilePath = $Bukti_tf['tmp_name'];
//             $newFileName = uniqid(). '_'. basename($Bukti_tf['name']);
//             $targetFilePath = "gambar/". $newFileName;

//             if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
//                 $Bukti_tf = $newFileName;
//             } else {
//                 echo "Error uploading file.";
//                 exit();
//             }
//         } else {
//             echo "File upload failed.";
//             exit();
//         }
//     } else {
//         echo "No file uploaded.";
//         exit();
//     }

//     // Query untuk memasukkan data
//     $sql = "INSERT INTO usertopup (Pelanggan,Kategori_Game,Tanggal_Masuk,Perkiraan_Selesai,Status,Nomor_Hp,Bukti_tf) VALUES (?,?,?,?,?,?,?)";
//     $stmt = $con->prepare($sql);
//     $stmt->bind_param("sssssss", $Pelanggan, $Kategori_Game, $Tanggal_Masuk, $Perkiraan_Selesai, $Status, $Nomor_Hp, $Bukti_tf);

//     // Eksekusi query
//     if ($stmt->execute()) {
//         echo "Data berhasilditambahkan.";
//         // Tutup statement dan koneksi
//         $stmt->close();
//         $con->close();

//         header("Location: dashboardadmin.php");
//         exit();
//     } else {
//         echo "Error: ". $stmt->error;
//         // Tutup statement dan koneksi
//         $stmt->close();
//         $con->close();
//     }
// }
?>

