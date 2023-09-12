<?php 

$host = 'localhost';
$usern = 'root';
$pass = '';
$db = 'db_siswa';

$conn = mysqli_connect($host, $usern, $pass, $db);


// kondisi cek koneksi, menulis tanpa TRUE tidak masalah
// if ($conn == TRUE) {
//     echo "Koneksi berhasil";
// } else {
//     echo "Koneksi Gagal";
// }

// modifikasi tanpa menggunakan else
if (!$conn) {
    echo "Koneksi Gagal";
}



?>