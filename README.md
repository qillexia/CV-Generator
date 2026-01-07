# CV Generator (PHP)

Generator CV sederhana berbasis PHP yang membantu Anda mengumpulkan data pribadi, pendidikan, pengalaman, serta keterampilan, lalu mengekspornya menjadi berkas PDF yang rapi.

## Fitur
- Formulir berlangkah untuk:
  - Data pribadi
  - Pendidikan
  - Pengalaman
  - Keterampilan
- Pratinjau/halaman ringkasan
- Ekspor ke PDF melalui skrip `generate_pdf.php`
- Struktur proyek sederhana, mudah dimodifikasi (CSS terpisah)

## Teknologi
- PHP (native)
- Composer (manajemen dependensi PHP)
- CSS untuk styling
- Library PDF PHP (lihat dependensi pada `composer.json` setelah menjalankan `composer install`)

## Prasyarat
- PHP 7.4+ (disarankan 8.x)
- Composer
- Web server lokal (opsional, bisa gunakan PHP built-in server)

## Instalasi
1. Klon repositori:
   ```bash
   git clone https://github.com/qillexia/CV-Generator.git
   cd CV-Generator
   ```
2. Pasang dependensi PHP:
   ```bash
   composer install
   ```
   Catatan: jika Anda belum menginstal Composer, ikuti panduan di https://getcomposer.org/

## Menjalankan Secara Lokal
- Menggunakan PHP built-in server:
  ```bash
  php -S localhost:8000
  ```
  Lalu buka di browser:
  - http://localhost:8000/landingpage.php

- Atau tempatkan folder proyek di dalam root server lokal Anda (mis. `htdocs` untuk XAMPP/Laragon), lalu akses:
  - http://localhost/CV-Generator/landingpage.php

## Alur Penggunaan
1. Buka `landingpage.php` untuk memulai.
2. Isi data di halaman:
   - `pribadi.php` — Data pribadi (nama, kontak, ringkasan singkat, dll.)
   - `pendidikan.php` — Riwayat pendidikan
   - `pengalaman.php` — Pengalaman kerja/organisasi
   - `keterampilan.php` — Keterampilan teknis/non-teknis
3. Setelah semua terisi, jalankan `generate_pdf.php` (umumnya dipicu dari tombol pada antarmuka) untuk menghasilkan CV dalam format PDF.
4. Unduh/simpan berkas PDF yang dihasilkan.

Catatan:
- Pastikan dependensi PDF (library yang didefinisikan pada `composer.json`) sudah terpasang dengan benar agar proses generate PDF berjalan lancar.
- Jika PDF kosong/tidak rapi, sesuaikan template HTML/CSS dan konfigurasi library PDF.

## Struktur Proyek
```
CV-Generator/
├─ assets/            # Aset statis (gambar, ikon, logo, dsb.)
├─ css/               # Berkas stylesheet
├─ data/              # (Opsional) penyimpanan data/file sementara jika diperlukan
├─ composer.json      # Definisi dependensi PHP
├─ composer.lock
├─ landingpage.php    # Halaman awal/alur pengisian
├─ pribadi.php        # Form data pribadi
├─ pendidikan.php     # Form data pendidikan
├─ pengalaman.php     # Form data pengalaman
├─ keterampilan.php   # Form data keterampilan
└─ generate_pdf.php   # Skrip untuk membuat PDF CV
```

## Kustomisasi
- Styling: ubah berkas di `css/` untuk tema/warna/typografi.
- Layout CV: sesuaikan struktur HTML pada halaman form dan cara `generate_pdf.php` membangun konten PDF.
- Bidang data: tambahkan input baru pada halaman terkait, lalu pastikan data tersebut diteruskan hingga proses generate PDF.

## Troubleshooting
- PDF tidak terbentuk:
  - Jalankan `composer install` dan pastikan tidak ada error.
  - Periksa ekstensi PHP yang diperlukan oleh library PDF (mis. `mbstring`, `gd`, `xml`) sudah aktif.
- Teks tidak tampil dengan benar:
  - Pastikan font yang digunakan didukung. Jika perlu, sematkan font atau gunakan font standar.
- Tata letak PDF berantakan:
  - Periksa CSS yang digunakan untuk template PDF; beberapa library PDF memiliki keterbatasan CSS.

## Kontribusi
Kontribusi sangat diterima:
1. Fork repositori ini
2. Buat branch fitur: `git checkout -b feature/nama-fitur`
3. Commit perubahan: `git commit -m "Tambah fitur X"`
4. Push ke branch: `git push origin feature/nama-fitur`
5. Buka Pull Request

## Lisensi
Belum ditentukan. Silakan tambahkan lisensi pilihan Anda (mis. MIT, Apache-2.0) pada berkas `LICENSE`.

## Kontak
- Pemilik repo: @qillexia
- Issue/Bug: gunakan tab Issues pada repositori GitHub ini

Selamat berkarya dan semoga bermanfaat!
