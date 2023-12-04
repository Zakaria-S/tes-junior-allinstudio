# Tes Junior Programmer Allinstudio
## By Muhamad Zakaria Saputra

## Penggunaan
Aktifkan dulu MySQL anda, lalu buka terminal di folder projek ini, lalu jalankan perintah:
```bash
composer install
```
```bash
php artisan migrate
```
```bash
php artisan db:seed --class=MerkSeeder && php artisan db:seed --class=KategoriSeeder && php artisan db:seed --class=ProdukSeeder && php artisan db:seed --class=AdminSeeder && php artisan serve
```

Begitu masuk aplikasi, anda akan disuguhkan formulir login<br>
Anda bisa masuk dengan menggunakan email atau no telepon ataupun username, dan password<br>
Adapun email/no telepon/username dan password default-nya adalah:<br><br>
<b>Email/No Telepon/Username :</b> admin@allinstudio.com/081234567890/admin<br>
<b>Password :</b> 12345
