<!DOCTYPE html>
<html>
<head>
    <title>Tambah Prodi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<h2>Tambah Program Studi</h2>

<div class="form-container">
    <form action="<?= base_url('index.php/prodi/simpan'); ?>" method="post">
        <label>Nama Prodi</label>
        <input type="text" name="nama_prodi" required>
        <input type="submit" value="Simpan">
    </form>

    <a href="<?= base_url('index.php/prodi'); ?>" class="back-link">← Kembali</a>
</div>

</body>
</html>
