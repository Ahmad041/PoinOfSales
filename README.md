# Point of Sales (POS) System

## Deskripsi Aplikasi
Aplikasi Point of Sales (POS) ini adalah sistem kasir yang dirancang untuk membantu manajemen penjualan, stok produk, dan laporan keuangan. Aplikasi ini memungkinkan pengguna untuk melakukan transaksi penjualan, mengelola produk, dan melihat laporan harian maupun bulanan.

## Fitur Utama
- Manajemen Produk (CRUD)
- Transaksi Penjualan
- Manajemen Pelanggan
- Laporan Harian dan Bulanan
- Sistem Login dengan Level User (Admin dan Kasir)
- Manajemen Stok Produk

## Teknologi yang Digunakan
- PHP (Backend)
- MySQL (Database)
- HTML, CSS, JavaScript (Frontend)
- XAMPP (Server Environment)

## Struktur Database
Database terdiri dari beberapa tabel utama:
- `akun` - Menyimpan data pengguna (admin dan kasir)
- `produk` - Menyimpan data produk
- `pelanggan` - Menyimpan data pelanggan
- `penjualan` - Menyimpan data transaksi
- `detail_penjualan` - Menyimpan detail transaksi
- `laporan_harian` - Menyimpan laporan penjualan harian
- `laporan_bulanan` - Menyimpan laporan penjualan bulanan

## Cara Instalasi
1. Pastikan XAMPP sudah terinstal di komputer Anda
2. Clone repository ini ke folder `htdocs` di XAMPP
3. Import file `point_of_sales.sql` ke dalam phpMyAdmin
4. Konfigurasi koneksi database jika diperlukan
5. Jalankan XAMPP (Apache dan MySQL)
6. Akses aplikasi melalui browser dengan URL: `http://localhost/POS`

## Cara Penggunaan
1. Login menggunakan akun yang tersedia:
   - Admin: email: admin@gmail.com, password: admin123
   - Kasir: email: kasir@gmail.com, password: kasir123

2. Fitur Admin:
   - Mengelola produk
   - Mengelola akun kasir
   - Melihat laporan harian dan bulanan
   - Mengelola pelanggan

3. Fitur Kasir:
   - Melakukan transaksi penjualan
   - Melihat stok produk
   - Melihat laporan penjualan

## Kontribusi
Silakan fork repository ini dan buat pull request untuk berkontribusi pada pengembangan aplikasi.

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE). 