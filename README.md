# Tes Junior Programmer Allinstudio
## By Muhamad Zakaria Saputra

## Penggunaan
Aktifkan dulu MySQL anda, lalu buka terminal di folder projek ini, lalu jalankan perintah:
```bash
composer install
php artisan migrate
php artisan db:seed --class=MerkSeeder
php artisan db:seed --class=KategoriSeeder
php artisan db:seed --class=ProdukSeeder
php artisan db:seed --class=AdminSeeder
php artisan serve
```
