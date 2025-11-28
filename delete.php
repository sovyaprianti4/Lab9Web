<?php include __DIR__ . "/../config.php"; 
$id = $_GET['id'];
mysqli_query($konn,"DELETE FROM barang WHERE id='$id'");
echo "<script>alert('Data terhapus');document.location='index.php?page=barang/list';</script>";
?>