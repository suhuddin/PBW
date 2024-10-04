
<link rel="stylesheet" href="<?= BASEURL; ?>assets/css/login.css">
<form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
<h2>Tambah Barang</h2>  
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" id="nama" required><br><br>
    <label for="stok">Stok:</label><br>
    <input type="number" name="stok" id="stok" required><br><br>
    <label for="harga">Harga:</label><br>
    <input type="number" name="harga" id="harga" required><br><br>
    <button type="submit">Simpan</button>
</form>

