Tujuan Proyek:
Membangun aplikasi Laravel sederhana dengan beberapa halaman utama dan fitur autentikasi
(login dan register),
yang menggunakan struktur controller dan blade template yang rapi, sesuai standar Laravel.
Fitur dan Halaman yang Dibuat:
1. Autentikasi (Login & Register)
- Menggunakan laravel/ui dengan Bootstrap (php artisan ui bootstrap --auth).
- Pengguna dapat melakukan login dan register.
- Setelah login, pengguna diarahkan ke halaman dashboard.
2. Halaman yang Disediakan:
- Login (/login): Form login pengguna.
- Register (/register): Form registrasi akun baru.
- Dashboard (/dashboard): Halaman utama setelah login. Menampilkan ucapan selamat datang.
- Pengelolaan (/pengelolaan): Menampilkan data (array dari controller) dalam bentuk tabel atau
kartu.
- Profile (/profile): Menampilkan informasi pengguna (misalnya username dari URL query).

3. Struktur Routing dan Controller
- Semua route didefinisikan di routes/web.php.
- Semua halaman (dashboard, profile, pengelolaan) di-handle oleh satu controller: PageController.
4. Blade Template & Komponen
- Menggunakan sistem layout Blade: layouts/app.blade.php sebagai master layout.
- Menggunakan direktif: @extends, @section, @yield, @include, dan komponen custom
(x-component).
- Komponen wajib: components/navbar.blade.php dan components/footer.blade.php
5. Parameter Request (Login Sederhana - jika tanpa auth)
  - Jika tidak menggunakan sistem login Laravel, login form bisa diarahkan ke
/dashboard?username=xxx dan ditampilkan secara dinamis.
6. Contoh Data Pengelolaan
- Controller menyediakan array data (misal daftar produk atau pengguna), dan akan ditampilkan
menggunakan loop di view pengelolaan.blade.php.
Struktur Folder Minimal:
- routes/web.php
- app/Http/Controllers/PageController.php
- resources/views/layouts/app.blade.php
- resources/views/components/navbar.blade.php
- resources/views/components/footer.blade.php
- resources/views/dashboard.blade.php
- resources/views/profile.blade.php
- resources/views/pengelolaan.blade.php
- resources/views/auth/login.blade.php
- resources/views/auth/register.blade.php























[![No Maintenance Intended](https://unmaintained.tech/badge.svg)](https://unmaintained.tech/)
[![Latest Stable Version](https://poser.pugx.org/sebastian/code-unit/v)](https://packagist.org/packages/sebastian/code-unit)
[![CI Status](https://github.com/sebastianbergmann/code-unit/workflows/CI/badge.svg)](https://github.com/sebastianbergmann/code-unit/actions)
[![codecov](https://codecov.io/gh/sebastianbergmann/code-unit/branch/main/graph/badge.svg)](https://codecov.io/gh/sebastianbergmann/code-unit)

# sebastian/code-unit

Collection of value objects that represent the PHP code units.

## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

```
composer require sebastian/code-unit
```

If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:

```
composer require --dev sebastian/code-unit
```

Please note that this is now a [low maintenance project](https://github.com/sebastianbergmann/code-unit/blob/main/.github/CONTRIBUTING.md#low-maintenance-project).
