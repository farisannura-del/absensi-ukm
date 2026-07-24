# 🎨 Sistem Absensi UKM Seni & Budaya

Sistem Absensi UKM Seni & Budaya merupakan aplikasi berbasis web yang dikembangkan menggunakan **Laravel 12** untuk mempermudah proses pengelolaan data anggota dan pencatatan absensi secara digital.

Aplikasi memiliki dua hak akses yaitu **Admin** dan **User**. Admin dapat mengelola anggota, melihat data absensi, serta melakukan export laporan ke PDF. User dapat login menggunakan Google dan melakukan absensi kehadiran.

---

# 👨‍💻 Identitas Mahasiswa

**Nama** : Faris An Nura

**NIM** : 240170227

---

# ✨ Fitur Aplikasi

- ✅ Login
- ✅ Login menggunakan Google (Laravel Socialite)
- ✅ Dashboard Admin
- ✅ Dashboard User
- ✅ CRUD Data Anggota
- ✅ Sistem Absensi Anggota
- ✅ Export Data Absensi ke PDF
- ✅ REST API
- ✅ Responsive Desktop
- ✅ Responsive Mobile
- ✅ Pemisahan Hak Akses Admin & User

---

# 🛠️ Teknologi yang Digunakan

- Laravel 12
- PHP 8.x
- MySQL
- Tailwind CSS
- Laravel Breeze
- Laravel Socialite
- DomPDF
- REST API
- Git
- GitHub

---

# 🚀 Cara Instalasi

## 1. Clone Repository

```bash
git clone https://github.com/farisannura-del/absensi-ukm.git
```

## 2. Masuk ke Folder Project

```bash
cd absensi-ukm
```

## 3. Install Dependency

```bash
composer install
```

## 4. Install Node Modules

```bash
npm install
```

## 5. Copy File Environment

```bash
cp .env.example .env
```

## 6. Generate Application Key

```bash
php artisan key:generate
```

## 7. Atur Database

Buat database MySQL kemudian sesuaikan konfigurasi database pada file `.env`.

Contoh:

```env
DB_DATABASE=absensi_ukm
DB_USERNAME=root
DB_PASSWORD=
```

## 8. Jalankan Migrasi

```bash
php artisan migrate
```

## 9. Jalankan Aplikasi

```bash
php artisan serve
```

Aplikasi dapat diakses pada:

```
http://127.0.0.1:8000
```

---

# 👤 Akun Demo

## Admin

Login menggunakan akun Admin yang telah dibuat pada database.

Contoh:

Email

```
admin@gmail.com
```

Password

```
password
```

## User

Login menggunakan akun Google yang telah didaftarkan pada sistem.

---

# 📡 REST API

## Endpoint

```
GET /api/attendances
```

## Contoh URL

```
http://127.0.0.1:8000/api/attendances
```

## Contoh Response

```json
{
  "success": true,
  "message": "Data absensi berhasil diambil.",
  "data": [
    {
      "id": 1,
      "tanggal": "2026-07-23",
      "jam_masuk": "20:23:52",
      "status": "Hadir"
    }
  ]
}
```

REST API telah diuji menggunakan Postman.

---

# 📸 Dokumentasi Aplikasi

## 1. Halaman Login

![Login](screenshots/login.png)

---

## 2. Login Google

![Google Login](screenshots/google-login.png)

---

## 3. Dashboard Admin

![Dashboard Admin](screenshots/dashboard-admin.png)

---

## 4. Dashboard User

![Dashboard User](screenshots/dashboard-user.png)

---

## 5. CRUD Data Anggota

![CRUD](screenshots/crud.png)

---

## 6. REST API (Postman)

![REST API](screenshots/api-postman.png)

---

## 7. Hak Akses Admin

![Hak Akses Admin](screenshots/admin.png)

---

## 8. Hak Akses User

![Hak Akses User](screenshots/user.png)

---

## 9. Responsive Desktop

![Responsive Desktop](screenshots/desktop.png)

---

## 10. Responsive Mobile

![Responsive Mobile](screenshots/mobile.png)

---

## 11. Export PDF

![Export PDF](screenshots/pdf.png)

---

# 📂 Struktur Project

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

---

# 🔗 Repository GitHub

https://github.com/farisannura-del/absensi-ukm

---

# 📄 Lisensi

Project ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Web / Framework Laravel** dan hanya digunakan untuk keperluan akademik.