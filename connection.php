<?php
$host = "localhost";
$db_name = "data_produk"; // ganti dengan nama database Anda
$username = "root";      // ganti dengan username database
$password = "";      // ganti dengan password database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Set error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    exit();
}
?>