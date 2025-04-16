<!DOCTYPE html>
<html>

<head>
  <title>Form Pemilu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
  <div class="container">
    <h2 class="mb-4">Form Pemungutan Suara (PEMILU)</h2>
    <form method="POST" action="proses_vote.php">
      <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="calon" class="form-label">Pilih Calon</label>
        <select class="form-select" name="calon" id="calon" required>
          <option value="">-- Pilih Calon --</option>
          <option value="1">Calon 1</option>
          <option value="2">Calon 2</option>
          <option value="3">Calon 3</option>
          <option value="4">Calon 4</option>
          <option value="5">Calon 5</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Kirim Suara</button>
    </form>
  </div>
</body>

</html>