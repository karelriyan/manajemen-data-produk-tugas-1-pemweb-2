<?php
include 'connection.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
if ($stmt->execute([$id])) {
    header("Location: index.php");
    exit();
} else {
    echo "Terjadi kesalahan saat menghapus produk.";
}
?>