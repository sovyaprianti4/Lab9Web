<?php include 'header.php'; ?>

<?php
if(isset($_GET['page'])){
    include $_GET['page'].'.php';
} else {
    echo "<h3>Selamat datang di aplikasi CRUD Modular Barang</h3>";
}
?>

<?php include 'footer.php'; ?>