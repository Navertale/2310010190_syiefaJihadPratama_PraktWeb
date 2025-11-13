<!DOCTYPE html>
<html>
<head>
    <title>Data Prodi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>

<h2>Data Program Studi</h2>

<?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
<?php endif; ?>

<a href="<?= base_url('index.php/prodi/tambah'); ?>" class="btn btn-prodi">+ Tambah Prodi</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Prodi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($prodi as $p): ?>
    <tr>
        <td><?= $p['id_prodi']; ?></td>
        <td><?= $p['nama_prodi']; ?></td>
        <td>
            <a href="<?= base_url('index.php/prodi/edit/'.$p['id_prodi']); ?>" class="btn btn-edit">Edit</a>
            <a href="<?= base_url('index.php/prodi/hapus/'.$p['id_prodi']); ?>" class="btn btn-hapus" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="<?= base_url('index.php/mahasiswa'); ?>" class="btn btn-print">← Kembali ke Mahasiswa</a>

</body>
</html>
