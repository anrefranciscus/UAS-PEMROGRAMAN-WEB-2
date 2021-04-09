👋 Hi, I’m @anrefranciscus
🌱 I’m currently learning PHP and JavaScript


# UAS-PEMROGRAMAN-WEB-2
UAS PEMROGRAMAN WEB 2 MEMBUAT SISTEM LOGIN LOGOUT DAN CRUD(INPUT,TAMPILKAN,EDIT,DELETE) 
KELOMPOK 5 
1. ANRE FRANCISCUS  (181011401594)
2. BAYU AJIABDILLAH
3. BIMA PRAWIRA KUSUMA ATMAJA
4. DANIEL AMBARITA
5. MUCHAMMAD BACHRUL ULUM
6. WAHYU NUR ALAM

PENJELASAN FITUR DAN FUNGSI DARI TIAP FILE PHP WEBSITE RESTORAN MAKANAN

indexlogin.php
- berisi form untuk login
- berisi link untuk daftar akun apabila belum mempunyai akun

daftar.php 
- berisi form untu daftar akun login

prosesdaftar.php
- include "koneksilogin" berfungsi untuk menghubungkan koneksi ke database login
- $username = $_POST['username'] untuk mengirim data username yang telah diinput
- $password = $_POST['username'] untuk mengirim data passsword yang telah diinput
- $query =mysqli($koneksi, "INSERT into tbl login) berfungsi untuk menginput data username dan password ke database agar user bisa login

proseslogin.php
- menggunakan fungsi session_start untuk memulai session login
- menggunakan mysqli_num_rows untuk melakukan pengecekan terhadap username dan password
- menggunakan header('Location:index.php') berfungsi untuk jika berhasil login akan dialihkan kehalaman utama

index.php
- berisi halaman utama setelah kita login
- berisi card header yang menggunakan <?= $jumlahpesanan; ?> berfungsi untuk menampilkan jumlah data pesanan yang telah kita input
- berisi menu-menu link yang menghubungkan / link ke halaman untuk input data dan cetak pdf
- berisi link logout yang jika diklik akan logout halaman website tersebut

add pesanan
- berisi form untuk input data pesanan 
- berisi menu-menu untuk link ke halaman lain seperti ke halaman home, input, dan cetak pesanan

prosesinput.php
- fungsi include 'koneksi.php' untuk menghubungkan dengan file koneksi agar terhubung dengan database
- fungsi if(isset($POST['pesanMakanan])) untuk melakukan mengambil data yang di diinput melalui form addpesanan untuk ditampung sementara sebelum dipush menggunakan query mysqli
- fungsi "INSERT INTO tbl_pilihrestoran yaitu untuk melakukan push ke databse
- fungsi $sql = mysqli_query($koneksi, $sql)  untuk mengeksekusi query sql agar sehingga data yang diinput berhasil disimpan ke database
- header("Location:viewdata") berfungsi untuk langsung menuju halaman viewdata jika kita telah melakukan input data

viewdata.php
- adalah file php yang menampilkan data yang telah kita input
- include "koneksi" untuk menghubungkan file ke database
- $sql = mysqli_query($koneksi, "SELECT * from tbl_pilihrestoran order by id asc) berfungsi untuk mengambil data dari database 
- while (data = mysqli_fetch_array($sql)) berfungsi untuk menampilkan database secara looping/perulangan sesuai data yang ada didatabase 

update.php
- include 'koneksi.php' untuk menghubungkan koneksi form update ke database
- $id = $_GET['id'] berfungsi untuk menampung data id sementara
- $qe = mysli_query($koneksi, "SELECT * from tbl_pilihrestoran where id) berfungsi untuk mengambil data dari database berdasarkan id
- $data = mysqli_fetch_array($qe) untuk memecah data dari database menjadi array dan ditampilkan ke form 

prosesupdate.php

- include 'koneksi.php' berfungsi untuk menghubungkan koneksi ke database
- if(isset($_POST['update'] untuk menanmpung data dari form update sementara sebelum di ekeskusi menggunakan query
- $sql = "UPDATE tbl_pilihrestoran set berfungsi untuk mengupdate data ke database

delete.php
- include 'koneksi.php' berfungsi untuk menghubungkan koneksi ke database
- $query = "DELETE FROM tbl_pilihrestoran where id berfungsi untuk delete data dari database berdasarkan id 

logout.php
- session_star() berfungsi untuk mengawali session
- session_destroy() berfungsi untuk mengakhiri session login




