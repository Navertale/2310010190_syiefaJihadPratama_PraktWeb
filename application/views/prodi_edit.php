<!DOCTYPE html>
<html>
<head>
    <title>Edit Prodi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<h2>Edit Program Studi</h2>

<div class="form-container">
    <form action="<?= base_url('index.php/prodi/update/'.$prodi['id_prodi']); ?>" method="post">
        <label>Nama Prodi</label>
        <input type="text" name="nama_prodi" value="<?= $prodi['nama_prodi']; ?>" required>
        <input type="submit" value="Simpan Perubahan">
    </form>

    <a href="<?= base_url('index.php/prodi'); ?>" class="back-link">← Kembali</a>
</div>

</body>
</html>
