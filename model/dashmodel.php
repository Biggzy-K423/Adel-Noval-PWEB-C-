// model.php
<?php
require 'koneksi.php';

function getPelangganByID($ID_Pelanggan) {
    global $con;
    $query = "SELECT * FROM usertopup WHERE ID_Pelanggan = $ID_Pelanggan";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
