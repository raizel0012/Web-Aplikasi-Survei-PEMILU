<?php
include 'koneksi.php';

$q = $conn->query("SELECT calon.nama, COUNT(suara.id) as total FROM suara JOIN calon ON suara.calon_id = calon.id GROUP BY calon.id");

echo "<h2>Hasil Rekapitulasi Suara:</h2>";
echo "<table border='1' cellpadding='10'>
<tr><th>Nama Calon</th><th>Jumlah Suara</th></tr>";

while ($r = $q->fetch_assoc()) {
    echo "<tr><td>{$r['nama']}</td><td>{$r['total']}</td></tr>";
}

echo "</table>";
