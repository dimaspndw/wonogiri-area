# Wilayah Wonogiri for Laravel

Package Laravel yang menyediakan data Kecamatan dan Desa di Kabupaten Wonogiri, lengkap dengan migrasi dan seeder. Cocok untuk aplikasi yang membutuhkan referensi data wilayah Wonogiri secara cepat dan otomatis.

## 📦 Instalasi

Tambahkan package ini melalui Composer:

```bash
composer require dimaspndw/wilayah-wonogiri
``` 
Jalankan di terminal :

```bash
php artisan migrate
php artisan db:seed --class="DimasPndw\WonogiriArea\Database\Seeders\WilayahSeeder"
```
