<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<div class="form-container">
    <form action="<?= base_url('index.php/mahasiswa/simpan'); ?>" method="post">
        <label>NIM</label>
        <input type="text" name="NIM" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" required>

        <label>Program Studi</label>
        <select name="id_prodi" required>
            <?php foreach ($prodi as $p): ?>
                <option value="<?= $p['id_prodi']; ?>"><?= $p['nama_prodi']; ?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Simpan">
    </form>

    <a href="<?= base_url('index.php/mahasiswa'); ?>" class="back-link">← Kembali</a>
</div>

</body>
</html>
