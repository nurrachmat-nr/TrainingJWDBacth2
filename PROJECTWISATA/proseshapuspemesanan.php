<?php
// Include koneksi ke database
include ("lib/database.php");
include ("lib/utils.php");

// Membuat objek database
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $data = $db->delete("tbl_transaksi", $id);
    writeLog("Transaksi dengan id $id berhasil dihapus");
    header("Location: daftarpemesanan.php?status=$data");
    exit;
}
?>