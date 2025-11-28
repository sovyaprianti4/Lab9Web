<?php include __DIR__ . "/../config.php"; ?>

<h3>Tambah Barang</h3>
<form method="POST">
    Nama Barang: <br>
    <input type="text" name="nama"><br><br>
    Harga: <br>
    <input type="number" name="harga"><br><br>
    Stok: <br>
    <input type="number" name="stok"><br><br>
    <button name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($konn,"INSERT INTO barang VALUES(NULL,'$_POST[nama]','$_POST[harga]','$_POST[stok]')");
    echo "<script>alert('Berhasil ditambah!');document.location='index.php?page=barang/list';</script>";
}
?>