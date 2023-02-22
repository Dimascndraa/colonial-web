<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Clone Code

Jika Anda ingin menambahkan projek ini di komputer Anda sendiri, Anda bisa melakukan instalasi dengan mengikuti cara dibawah ini.

# Klon repositori ini
```
git clone https://github.com/Dimascndraa/colonial-web.git
```

Setelah itu, buka repository dengan mengetikan perintah:
```
cd colonial-web
```

# Install Depedency

Depedensi adalah sekumpulan library yang dibutuhkan oleh aplikasi laravel kita, termasuk framework Laravel itu sendiri. List depedensi dapat dilihat pada berkas `composer.json` . Untuk menginstall semua depedensi, gunakan perintah `composer install` dan composer akan melakukan penelusuran depedensi apa saja yang dibutuhkan aplikasi, lalu mengunduhnya kedalam folder vendor . Sekali lagi, saya asumsikan disini sudah terinstall composer di mesin masing masing.
```
composer install
```

# Setup Environment Variable

Setelah `composer install` selesai, kemudian kita butuh membuat file `.env` di folder aplikasi kita. Namun, biasanya sudah ada file sampelnya. Kita cukup menyalin file itu saja (atau mengikuti README masing masing project).
```
cp .env.example .env
```
Kemudian isikan semua pengaturan yang perlu kamu masukkan, biasanya yang penting adalah pengaturan koneksi database.

Tidak kalah penting, jika dalam sampel `.env` tadi masih belum memiliki `APP_KEY` bisa menyebabkan error. Solusinya, cukup menjalankan perintah ini di terminal.
```
php artisan key:generate
```

# Migrate & Seed 
Langkah selanjutnya adalah melakukan migrate & seed dengan menjalankan perintah berikut ini:
```
php artisan migrate --seed
```

# Instal Node JS
Langkah selanjutnya adalah menginstal NodeJs  dengan menjalankan perintah berikut ini:
```
npm install && npm run dev
```

# Run Local Dev Server
Setelah semua sudah berhasil, langkah selanjutnya jalankan local server dengan perintah:
```
php artisan serve
```


