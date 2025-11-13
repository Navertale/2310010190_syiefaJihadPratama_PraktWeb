<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<div class="form-container">
    <form action="<?= base_url('index.php/mahasiswa/update/'.$mhs['id_mahasiswa']); ?>" method="post">
        <label>NIM</label>
        <input type="text" name="NIM" value="<?= $mhs['NIM']; ?>" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" value="<?= $mhs['nama_mhs']; ?>" required>

        <label>Program Studi</label>
        <select name="id_prodi">
            <?php foreach ($prodi as $p): ?>
                <option value="<?= $p['id_prodi']; ?>" <?= $p['id_prodi'] == $mhs['id_prodi'] ? 'selected' : ''; ?>>
                    <?= $p['nama_prodi']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Simpan Perubahan">
    </form>

    <a href="<?= base_url('index.php/mahasiswa'); ?>" class="back-link">← Kembali</a>
</div>

</body>
</html>
