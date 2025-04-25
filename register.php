<?php 
require 'koneksi.php';
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query_sql = "INSERT INTO tbl_users (name , username, email, password) 
        VALUES ('$name', '$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}