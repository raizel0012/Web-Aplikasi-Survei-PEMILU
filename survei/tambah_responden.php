<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$kandidat = $_POST['kandidat'];

$conn->query("INSERT INTO responden (nama, email) VALUES ('$nama', '$email')");
$responden_id = $conn->insert_id;

$conn->query("INSERT INTO survei (responden_id, kandidat_id) VALUES ($responden_id, $kandidat)");

echo "Terima kasih atas partisipasi Anda! <a href='grafik.html'>Lihat Grafik</a>";
