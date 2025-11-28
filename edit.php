<?php include __DIR__ . "/../config.php"; ?>
$id = $_GET['id'];
$data = mysqli_query($konn,"SELECT * FROM barang WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<h3>Edit Barang</h3>
<form method="POST">
    Nama Barang: <br>
    <input type="text" name="nama" value="<?= $d['nama']; ?>"><br><br>
    Harga: <br>
    <input type="number" name="harga" value="<?= $d['harga']; ?>"><br><br>
    Stok: <br>
    <input type="number" name="stok" value="<?= $d['stok']; ?>"><br><br>
    <button name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($konn,"UPDATE barang SET nama='$_POST[nama]', harga='$_POST[harga]', stok='$_POST[stok]' WHERE id='$id'");
    echo "<script>alert('Berhasil diupdate!');document.location='index.php?page=barang/list';</script>";
}
?>