<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="/CIPPAAA/public/css/style.css">
</head>
<body>

<h2>Tambah Mahasiswa</h2>

<div class="form-box">
    <form action="<?= base_url('mahasiswa/simpan'); ?>" method="post">

        <label>NIM</label>
        <input type="text" name="NIM" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" required>

        <label>Program Studi</label>
        <select name="id_prodi" required>
            <option value="">- Pilih Prodi -</option>
            <?php foreach ($prodi as $p): ?>
                <option value="<?= $p['id_prodi']; ?>">
                    <?= $p['nama_prodi']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn btn-tambah">Simpan</button>
    </form>
</div>

<br>
<a href="<?= base_url('mahasiswa'); ?>" class="bt_
