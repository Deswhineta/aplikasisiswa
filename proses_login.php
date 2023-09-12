<?php 
include 'koneksi.php';

session_start();

$username= $_POST['username'];
$password= sha1($_POST['password']);

$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$data= mysqli_query($conn, $sql);
$result= mysqli_num_rows($data);

if ($result === 1) {
    $_SESSION['username'] = $username;
    header ('location:index.php');
    echo "berhasil";
}else {
    echo "Username atau Password yang dimasukkan salah!";
}


?>