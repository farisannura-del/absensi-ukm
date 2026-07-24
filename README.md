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

<img width="1917" height="1078" alt="login" src="https://github.com/user-attachments/assets/8003d9f6-fbde-4275-950a-907687c03861" />


---

## 2. Login Google

<img width="1917" height="1076" alt="google-login" src="https://github.com/user-attachments/assets/50dad1e9-1a25-466f-b379-e9fbe1906bff" />


---

## 3. Dashboard Admin

<img width="1917" height="1078" alt="dashboard-admin" src="https://github.com/user-attachments/assets/2353503f-00ce-427f-8374-363990baa4f6" />


---

## 4. Dashboard User

<img width="1917" height="1078" alt="dashboard-user" src="https://github.com/user-attachments/assets/f1cd826b-1924-4b8a-a243-6e00d38becc8" />


---

## 5. CRUD Data Anggota

<img width="1917" height="1078" alt="crud-tambah" src="https://github.com/user-attachments/assets/d1031988-3c1b-42f6-8b40-45eb5f975c29" />

<img width="1917" height="1078" alt="crud-read" src="https://github.com/user-attachments/assets/d23ce093-f086-41ea-86b0-523b5f1ed42d" />

<img width="1917" height="1078" alt="crud-edit" src="https://github.com/user-attachments/assets/d5b7c5ac-eadb-413c-9812-d3aa85dfeec1" />

<img width="1917" height="1078" alt="crud-delete" src="https://github.com/user-attachments/assets/493d1a7d-9c5a-4eb5-93e7-89415afd0431" />



---

## 6. REST API (Postman)

<img width="1912" height="1071" alt="api-postman" src="https://github.com/user-attachments/assets/9fe6af2e-7e7e-4824-a4af-8f0510b5ad66" />


---

## 7. Hak Akses Admin

<img width="1917" height="1078" alt="admin" src="https://github.com/user-attachments/assets/f0743ac2-a492-4967-8ae6-bbd2377f2b1a" />


---

## 8. Hak Akses User

<img width="1917" height="1078" alt="user" src="https://github.com/user-attachments/assets/b56d5706-b6ba-46a5-b287-d498f8243995" />


---

## 9. Responsive Desktop

<img width="1917" height="1078" alt="desktop" src="https://github.com/user-attachments/assets/65330f6c-ec85-47ba-91e0-3c0d45898192" />


---

## 10. Responsive Mobile

<img width="1917" height="1078" alt="mobile" src="https://github.com/user-attachments/assets/0af99205-827a-47d4-826f-5168ad19515f" />


---

## 11. Export PDF

<img width="1917" height="1078" alt="pdf" src="https://github.com/user-attachments/assets/e7a95148-c369-4626-be67-8aab323c4a35" />

<img width="1917" height="1078" alt="hasil-pdf" src="https://github.com/user-attachments/assets/9ac66144-e18c-41d3-b6a4-73c8aad9bdb0" />


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
