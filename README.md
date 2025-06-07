<h1 align="center">📡 Laravel REST API - UAS Cloud Computing</h1>

<p align="center">
  <strong>Affan Naufal Syarif Al Ghifari</strong><br/>
  <code>223307088</code> | <code>Kelas 6D</code><br/>
  Politeknik Negeri Madiun<br/>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/framework-laravel-red" />
  <img src="https://img.shields.io/badge/type-rest--api-blue" />
  <img src="https://img.shields.io/badge/status-complete-brightgreen" />
</p>

---

## 🚀 Deskripsi Proyek

Aplikasi ini merupakan implementasi **RESTful API menggunakan Laravel** sebagai tugas **UAS Cloud Computing**. Fungsinya untuk melakukan manajemen data **karyawan** seperti tambah, lihat, edit, dan hapus.

---

## ⚙️ Instalasi & Setup

```bash
# Clone repository
git clone https://github.com/username/restapi-223307088.git
cd restapi-223307088

# Install dependensi Laravel
composer install

# Copy file .env dan generate key
cp .env.example .env
php artisan key:generate

# Atur konfigurasi database di file .env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

# Jalankan migrasi tabel
php artisan migrate

# Jalankan server lokal
php artisan serve
```
<h2>📚 Tabel Dokumentasi API</h2>

<table border="1" cellspacing="0" cellpadding="6">
  <thead>
    <tr>
      <th>Endpoint</th>
      <th>Method</th>
      <th>Deskripsi</th>
      <th>Contoh Request</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code>/api/karyawan</code></td>
      <td><strong>GET</strong></td>
      <td>Menampilkan semua data karyawan</td>
      <td><code>GET http://localhost:8000/api/karyawan</code></td>
    </tr>
    <tr>
      <td><code>/api/karyawan/{id}</code></td>
      <td><strong>GET</strong></td>
      <td>Menampilkan data karyawan berdasarkan ID</td>
      <td><code>GET http://localhost:8000/api/karyawan/1</code></td>
    </tr>
    <tr>
      <td><code>/api/karyawan</code></td>
      <td><strong>POST</strong></td>
      <td>Menambahkan data karyawan baru</td>
      <td><code>POST http://localhost:8000/api/karyawan</code></td>
    </tr>
    <tr>
      <td><code>/api/karyawan/{id}</code></td>
      <td><strong>PUT</strong></td>
      <td>Mengubah data karyawan berdasarkan ID</td>
      <td><code>PUT http://localhost:8000/api/karyawan/1</code></td>
    </tr>
    <tr>
      <td><code>/api/karyawan/{id}</code></td>
      <td><strong>DELETE</strong></td>
      <td>Menghapus data karyawan berdasarkan ID</td>
      <td><code>DELETE http://localhost:8000/api/karyawan/1</code></td>
    </tr>
  </tbody>
</table>
