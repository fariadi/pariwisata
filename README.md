## Persiapan Aplikasi

1. Memiliki CLI/Command Line Interface berupa Command Prompt (CMD) atau Power Shell atau Git Bash (selanjutnya kita sebut terminal).
2. Memiliki Web Server (misal XAMPP) dengan PHP versi 8.1 dan Database MySQL
4. Memiliki aplikasi Composer yang sudah ter-install, cek dengan perintah ``composer -V`` melalui terminal.
5. Memiliki koneksi internet (untuk proses installasi).

## Langkah langkah instalasi aplikasi
1. Clone repository, bisa di download ``.zip`` atau dengan perintah ``git clone`` pada Command Prompt seperti ini
```
git clone https://github.com/fariadi/pariwisata.git
```

<img src="https://i.ibb.co/17ntM78/Screenshot-9.png" >

>Jika dalam bentuk zip hasil download Extract file zip (source code) ke dalam direktori htdocs pada XAMPP, misal ``C:/xampp/htdocs/pariwisata``.
4. Melalui terminal, masuk ke direktori aplikasi misal contohnya
```
cd c:/xampp/htdocs/pariwisata
```
4. (Sesuai petunjuk installasi) Pada terminal, berikan perintah
```
composer install
```
<img src="https://i.ibb.co/0jK44bg/Screenshot-10.png"  border="0">

> Ini memerlukan koneksi internet. Composer akan menginstall dependency paket dari source code tersebut hingga selesai
5. Setting koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=pariwisata
DB_USERNAME=root
DB_PASSWORD=
```
6. Impor file databes ke aplikasi database MySQL. file SQL ada di dalam folder aplikasi dengan nama ``pariwisata.sql``.
7. Aplikasi bisa dijalankan melalui terminal dengan perintah
```
php artisan serve
```
<img src="https://i.ibb.co/1qY5hpx/Screenshot-11.png" alt="Screenshot-11" border="0">

>jika berhasil aplikasi dapat di jalan di browswer dengan alamat ``http://localhost:8000/`` <br/>
atau jika menggunakan aplikasi XAMPP dengan mamasukan url misal ``http://localhost/pariwisata/public/``
