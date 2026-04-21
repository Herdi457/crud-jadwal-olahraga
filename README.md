# 🏋️ CRUD Jadwal Olahraga

Aplikasi web sederhana untuk mencatat dan mengelola jadwal olahraga harian supaya hidup lebih teratur dan gak malas gerak lagi!

---

### 🌟 Fitur Utama
Aplikasi ini sudah memiliki fungsi **CRUD** lengkap:
* **Tambah Jadwal:** Masukkan rencana olahraga, hari, dan jamnya.
* **Daftar Jadwal:** Lihat semua list rencana olahraga dalam satu tabel rapi.
* **Edit Data:** Rencana berubah? Tinggal update detail jadwalnya.
* **Hapus:** Jadwal sudah selesai atau batal? Hapus saja biar list tetap bersih.

### 🛠️ Teknologi yang Digunakan
* **Framework:** Laravel 12
* **Database:** MySQL
* **Web Server:** Laragon (Local Development)
* **Bahasa:** PHP 8.3

---

### ⚙️ Prosedur Instalasi
Kalau kamu ingin menjalankan project ini di komputer lain, ikuti langkah ini:

1. **Clone/Download** repository ini ke folder `www` di Laragon kamu.
2. **Siapkan Database:**
   - Buka Database Manager di Laragon (HeidiSQL).
   - Buat database baru dengan nama: `db_crud_jadwal_olahraga`.
3. **Konfigurasi Environment:**
   - Copy file `.env.example` menjadi `.env`.
   - Pastikan bagian `DB_DATABASE=db_crud_jadwal_olahraga` sudah sesuai.
4. **Install Library:**
   Buka terminal di folder project, lalu jalankan:
   ```bash
   composer install