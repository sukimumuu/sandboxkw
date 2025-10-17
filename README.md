# Sandboxkw - Platform Ekosistem Startup

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Laravel Sail](https://img.shields.io/badge/Laravel_Sail-2596ED?style=for-the-badge&logo=docker&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

Sebuah proyek untuk belajar dan mendalami Laravel dalam lingkungan pengembangan modern menggunakan **Laravel Sail** (Docker). Proyek ini membangun sebuah platform ekosistem startup yang terinspirasi dari drama Korea populer, **"Start-Up" (스타트업)**.

Website ini bertujuan menjadi "Sandboxkw" digital, tempat para visioner, developer, desainer, dan investor bertemu untuk berkolaborasi, berinovasi, dan membangun masa depan teknologi.

## 🚀 Tentang Proyek

**Sandboxkw** adalah platform web yang mensimulasikan ekosistem startup. Pengguna dapat mendaftarkan ide startup mereka, mencari anggota tim (co-founder), atau bergabung dengan startup yang sudah ada. Di sisi lain, investor dapat menelusuri startup potensial untuk mendanai ide-ide brilian.

Proyek ini dibuat sebagai studi kasus untuk mengimplementasikan fitur-fitur umum dalam aplikasi web modern menggunakan framework Laravel dan mengelolanya dengan Docker via Laravel Sail.

## ✨ Fitur Utama (Cooming Soon)

Platform ini memiliki beberapa fitur inti, antara lain:

* **👥 Manajemen Pengguna & Profil:**
    * Autentikasi (Register & Login) dengan role (Founder, Member, Investor).
    * Profil pengguna yang menampilkan skill, pengalaman, dan portofolio.

* **🏢 Profil Startup:**
    * Mendirikan startup baru dengan deskripsi, visi, misi, dan model bisnis.
    * Merekrut anggota tim dengan membuka lowongan untuk posisi tertentu (misal: CEO, CTO, CMO).
    * Menampilkan anggota tim yang sudah bergabung.

* **🤝 Rekrutmen & Kolaborasi:**
    * Pengguna bisa melamar untuk bergabung dengan startup yang ada.
    * Founder dapat menerima atau menolak lamaran yang masuk.

* **💰 Pendanaan & Investor:**
    * Pengguna dapat mendaftar sebagai investor terverifikasi.
    * Investor dapat menjelajahi daftar startup dan memberikan pendanaan (*invest*).
    * Seorang Founder juga bisa bertindak sebagai investor untuk startup lain.

* **📈 Dashboard & Berita:**
    * Menampilkan daftar startup yang sedang trending berdasarkan jumlah anggota atau pendanaan.
    * Fitur "Berita Hangat" yang menampilkan artikel atau berita terkini seputar dunia teknologi dan startup.

<!--
## 📦 Instalasi & Konfigurasi (Menggunakan Laravel Sail)

Pastikan Anda sudah menginstal **Docker Desktop** di sistem Anda. Anda tidak perlu menginstal PHP atau MySQL secara lokal.

1.  **Clone Repository Ini**
    ```bash
    git clone [URL_REPOSITORY_ANDA]
    cd [NAMA_FOLDER_PROYEK]
    ```

2.  **Buat File Environment**
    Salin file `.env.example` menjadi `.env`. Konfigurasi database sudah diatur secara otomatis untuk Sail.
    ```bash
    cp .env.example .env
    ```

3.  **Instal Dependensi Composer**
    Perintah ini akan mengunduh image Docker yang diperlukan jika belum ada, menjalankan container sementara, dan menginstal dependensi PHP.
    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php84-composer:latest \
        composer install --ignore-platform-reqs
    ```

4.  **Jalankan Sail**
    Gunakan skrip Sail untuk membangun dan menjalankan semua service di background.
    ```bash
    ./vendor/bin/sail up -d
    ```

5.  **Generate Application Key**
    Gunakan `sail` untuk menjalankan perintah Artisan di dalam container.
    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

6.  **Jalankan Migrasi & Seeder Database**
    Buat struktur tabel dan isi data awal ke database.
    ```bash
    ./vendor/bin/sail artisan migrate --seed
    ```

7.  **Selesai! 🎉**
    Aplikasi Anda sekarang sudah berjalan. Buka browser dan akses:
    **http://localhost**
    *(Port default adalah 80, sesuai dengan `APP_PORT` di file `.env` Anda).*

##  sail Alias (Sangat Direkomendasikan)

Untuk menghindari pengetikan `./vendor/bin/sail` berulang kali, Anda bisa membuat alias.

```bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

Setelah alias diatur, Anda bisa menjalankan perintah seperti `sail up`, `sail artisan migrate`, dll.

## 🐳 Perintah Sail yang Berguna

* **Menjalankan container di background:**
    ```bash
    sail up -d
    ```
* **Menghentikan semua container:**
    ```bash
    sail down
    ```
* **Menjalankan perintah Artisan:**
    ```bash
    sail artisan <nama-perintah>
    ```
* **Menjalankan Composer:**
    ```bash
    sail composer <nama-perintah>
    ```
* **Masuk ke shell container aplikasi:**
    ```bash
    sail shell
    ```
* **Melihat log aplikasi secara real-time:**
    ```bash
    sail logs -f
    ```
---