<?php
include 'koneksi.php';

$data = ["label" => [], "jumlah" => []];
$q = $conn->query("SELECT k.nama, COUNT(s.id) as total FROM survei s JOIN kandidat k ON s.kandidat_id = k.id GROUP BY k.id");

while ($r = $q->fetch_assoc()) {
    $data['label'][] = $r['nama'];
    $data['jumlah'][] = $r['total'];
}
echo json_encode($data);
