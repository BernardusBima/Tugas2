# Tugas 2: MySQL to JSON & JSON to PHP

Repositori ini berisi pengerjaan tugas praktikum ke-2 untuk mata kuliah **Rekayasa Web**. [cite\_start]Tugas ini berfokus pada alur kerja lengkap: mengambil data dari database **MySQL**, mengubahnya (encode) menjadi format **JSON**, dan kemudian mengambil (fetch) data JSON tersebut untuk di-decode dan ditampilkan kembali sebagai **tabel HTML** menggunakan PHP[cite: 1].

-----

## ✒️ Deskripsi Tugas

[cite\_start]Tugas ini terdiri dari tiga bagian utama berdasarkan materi "Praktikum 2"[cite: 1, 37, 63]:

1.  **Membuat Database & Tabel:** Menyiapkan database `json` dan tabel `wisata` di MySQL sesuai dengan struktur yang diberikan.
2.  [cite\_start]**API Sederhana (MySQL to JSON):** Membuat skrip `getWisata.php` yang mengambil data dari tabel `wisata` dan meng-encode-nya ke format JSON [cite: 21, 23, 24-34].
3.  [cite\_start]**Tampilan Klien (JSON to PHP/HTML):** Membuat skrip `tampilWisata.php` yang menggunakan cURL untuk mengambil data JSON dari `getWisata.php` [cite: 37, 39, 41, 50][cite\_start], men-decode-nya menjadi array PHP [cite: 52][cite\_start], dan menampilkannya dalam bentuk tabel HTML sesuai latihan 2.A.2[cite: 63, 64, 65].

-----

## 📂 Struktur Repositori

  * `getWisata.php`: Berisi script PHP untuk berfungsi sebagai API, mengambil data dari MySQL dan meng-encode-nya ke JSON.
  * `tampilWisata.php`: Berisi script PHP untuk mengambil data JSON (via cURL) dari `getWisata.php` dan menampilkannya dalam tabel HTML.

-----

## 📸 Hasil Screenshot

Berikut adalah hasil output dari kedua script saat dijalankan di browser.


### 1\. Output `getWisata.php` (Raw JSON)

[cite\_start]URL: `http://localhost/rekayasaweb/pertemuan2/getWisata.php` [cite: 35]

```json
[
  {"id_wisata":"1","kota":"SEMARANG","landmark":"LAWANG SEWU","tarif":"20000"},
  {"id_wisata":"2","kota":"YOGYAKARTA","landmark":"PRAMBANAN","tarif":"35000"},
  {"id_wisata":"3","kota":"MAGELANG","landmark":"BOROBUDUR","tarif":"45000"},
  {"id_wisata":"4","kota":"SURAKARTA","landmark":"PGS","tarif":"GRATIS"}
]
```

*(Catatan: Ganti screenshot ini dengan hasil dari browser kamu)*

### 2\. Output `tampilWisata.php` (Tabel HTML)

[cite\_start]URL: `http://localhost/rekayasaweb/pertemuan2/tampilWisata.php` [cite: 60]

[cite\_start]*(Catatan: Ganti URL gambar di atas dengan URL screenshot hasil tabel HTML kamu sendiri. Gambar di atas adalah representasi berdasarkan PDF [cite: 65])*

-----

## ⚙️ Teknologi yang Digunakan

  * **PHP**
  * **MySQL** (Database)
  * Web Server Lokal (seperti **XAMPP** dengan modul **Apache** & **MySQL**)
  * **JSON** (Format Data)
  * [cite\_start]**cURL** (Modul PHP) [cite: 37, 41]
  * **HTML/CSS** (Untuk tampilan)

-----

## 🚀 Cara Menjalankan

Untuk menjalankan script ini di lingkungan lokal, ikuti langkah-langkah berikut:

1.  **Clone Repositori**

    ```bash
    git clone [URL-REPOSITORI-KAMU]
    ```

2.  **Pindahkan Folder**
    Pindahkan folder hasil clone ke dalam direktori `htdocs` pada instalasi XAMPP Anda.
    (Contoh path dari skrip Anda: `C:\xampp\htdocs\rekayasaweb\pertemuan2`)

3.  **Jalankan XAMPP**
    Buka XAMPP Control Panel, lalu jalankan service **Apache** dan **MySQL**.

4.  **Setup Database (PENTING)**

      * Buka browser dan akses `http://localhost/phpmyadmin`.
      * [cite\_start]Buat database baru dengan nama `json`[cite: 2].
      * Pilih database `json`, lalu buka tab **SQL**.
      * Jalankan query SQL berikut untuk membuat tabel dan mengisinya:

    <!-- end list -->

    ```sql
    -- 1. Membuat tabel 'wisata'
    CREATE TABLE wisata (
      id_wisata INT(2) PRIMARY KEY AUTO_INCREMENT,
      kota VARCHAR(10),
      landmark VARCHAR(100),
      tarif VARCHAR(10)
    );

    -- 2. Mengisi data ke tabel 'wisata'
    INSERT INTO wisata (kota, landmark, tarif) VALUES
    ('SEMARANG', 'LAWANG SEWU', '20000'),
    ('YOGYAKARTA', 'PRAMBANAN', '35000'),
    ('MAGELANG', 'BOROBUDUR', '45000'),
    ('SURAKARTA', 'PGS', 'GRATIS');
    ```

5.  **Periksa URL cURL**
    Pastikan URL di dalam file `tampilWisata.php` sudah benar dan menunjuk ke lokasi file `getWisata.php` di server lokalmu.

    ```php
    // Ganti URL ini jika path folder kamu berbeda
    $send = curl("http://localhost/rekayasaweb/pertemuan2/getWisata.php");
    ```

6.  **Buka di Browser**
    Buka browser Anda dan akses URL berikut:

      * Untuk melihat JSON: `http://localhost/rekayasaweb/pertemuan2/getWisata.php`
      * Untuk melihat Tabel: `http://localhost/rekayasaweb/pertemuan2/tampilWisata.php`

-----

## 👨‍🎓 Informasi Mahasiswa

  * **Nama:** Bernardus Bima Satria
  * **NIM/NPM:** G.231.23.0057
  * **Kelas:** Teknik Informatika A2
  * **Dosen Pengampu:** Dicky Yudha Pratama, M.Kom
