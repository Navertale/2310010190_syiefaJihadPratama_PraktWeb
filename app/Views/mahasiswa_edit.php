<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="/CIPPAAA/public/css/style.css">
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<div class="form-box">
    <form action="<?= base_url('mahasiswa/updateData/'.$mhs['id_mahasiswa']); ?>" method="post">

        <label>NIM</label>
        <input type="text" name="NIM" value="<?= $mhs['NIM']; ?>" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" value="<?= $mhs['nama_mhs']; ?>" required>

        <label>Program Studi</label>
        <select name="id_prodi" required>
            <?php foreach ($prodi as $p): ?>
                <option value="<?= $p['id_prodi']; ?>"
                    <?= ($p['id_prodi'] == $mhs['id_prodi']) ? 'selected' : ''; ?>>
                    <?= $p['nama_prodi']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn btn-edit">Update</button>
    </form>
</div>

<br>
<a href="<?= base_url('mahasiswa'); ?>" class="btn btn-print">Kembali</a>

</body>
</html>
