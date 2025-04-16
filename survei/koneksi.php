<?php
$conn = new mysqli("localhost", "root", "", "tugas_survei");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
