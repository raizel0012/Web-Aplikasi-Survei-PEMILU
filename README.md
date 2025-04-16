# Web-Aplikasi-Survei-PEMILU

Proyek ini terdiri dari dua aplikasi:
- **Survei**: Form untuk mengisi pilihan kandidat + tampilan grafik hasil
- **PEMILU**: Sistem pemungutan suara dengan 5 calon dan 1x hak pilih per NIK

---

## 📁 Struktur
- `survei/`: Form + Grafik Chart.js
- `pemilu/`: Pemilu 5 calon dengan validasi satu kali vote
- `sql/`: File SQL untuk import ke phpMyAdmin

---

## 🧩 Cara Menjalankan

### 1. Instalasi Lokal (XAMPP)
- Ekstrak folder ini ke `htdocs/`
- Jalankan `Apache` & `MySQL` dari XAMPP

### 2. Buat Database
Import file SQL berikut di `phpMyAdmin`:
- `sql/tugas_survei.sql`
- `sql/tugas_pemilu.sql`

### 3. Akses Web
- Survei: `http://localhost/survei/form.html`
- Grafik: `http://localhost/survei/grafik.html`
- Pemilu: `http://localhost/pemilu/index.php`

---

## 🎨 Teknologi yang Digunakan
- PHP & MySQL
- Chart.js untuk grafik
- Bootstrap 5 untuk styling

---

## ✅ Fitur Penting
- Form input & validasi
- Grafik otomatis dari database
- Validasi NIK hanya boleh memilih 1 kali

---


