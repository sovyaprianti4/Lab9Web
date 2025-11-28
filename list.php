<?php include __DIR__ . "/../config.php"; ?>

<h3>Data Barang</h3>
<a href="index.php?page=barang/tambah">+ Tambah Barang</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>No</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th>
</tr>

<?php
$no=1;
$data = mysqli_query($konn,"SELECT * FROM barang");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['harga']; ?></td>
    <td><?= $d['stok']; ?></td>
    <td>
        <a href="index.php?page=barang/edit&id=<?= $d['id']; ?>">Edit</a> |
        <a href="index.php?page=barang/delete&id=<?= $d['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>