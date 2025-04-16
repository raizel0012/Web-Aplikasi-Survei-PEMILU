<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$calon = $_POST['calon'];

// Cek apakah NIK sudah ada
$cek = $conn->query("SELECT id, sudah_memilih FROM pemilih WHERE nik='$nik'");
if ($cek->num_rows > 0) {
    $data = $cek->fetch_assoc();
    if ($data['sudah_memilih']) {
        echo "❌ NIK ini sudah digunakan untuk memilih. Anda tidak bisa memilih lagi.";
    } else {
        $conn->query("UPDATE pemilih SET sudah_memilih=1 WHERE id=" . $data['id']);
        $conn->query("INSERT INTO suara (pemilih_id, calon_id) VALUES ({$data['id']}, $calon)");
        echo "✅ Terima kasih, suara Anda berhasil disimpan. <a href='hasil.php'>Lihat Hasil</a>";
    }
} else {
    $conn->query("INSERT INTO pemilih (nik, nama, sudah_memilih) VALUES ('$nik', '$nama', 1)");
    $pemilih_id = $conn->insert_id;
    $conn->query("INSERT INTO suara (pemilih_id, calon_id) VALUES ($pemilih_id, $calon)");
    echo "✅ Terima kasih, suara Anda berhasil disimpan. <a href='hasil.php'>Lihat Hasil</a>";
}
