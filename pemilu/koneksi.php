<?php
$conn = new mysqli("localhost", "root", "", "tugas_pemilu");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>