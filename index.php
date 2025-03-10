<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Manajemen Produk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min. css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Data Produk</h1>
        <a href="add_product.php" class="btn btn-primary mb-3">Tambah Produk</a>
        <table id="productsTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM products");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['stock']}</td>
                    <td>
                        <a href='edit_product.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete_product.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin akan menghapus data?')\">Hapus</a>
                    </td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#productsTable').DataTable();
        });
    </script>
</body>

</html>