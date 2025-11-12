<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
<body>

<h2>Data Mahasiswa</h2>
<?php if($this->session->flashdata('success')): ?>
    <div style="
        background:#d4edda;
        border:1px solid #c3e6cb;
        color:#155724;
        padding:10px;
        border-radius:4px;
        margin-bottom:15px;
        ">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<a href="<?= base_url('index.php/mahasiswa/tambah'); ?>" class="btn btn-tambah">+ Tambah</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['id_mahasiswa'] ?></td>
        <td><?= $m['NIM'] ?></td>
        <td><?= $m['nama_mhs'] ?></td>
        <td><?= $m['nama_prodi'] ?></td>
        <td>
            <a href="<?= base_url('index.php/mahasiswa/edit/'.$m['id_mahasiswa']); ?>" class="btn btn-edit">Edit</a>
            <a href="<?= base_url('index.php/mahasiswa/hapus/'.$m['id_mahasiswa']); ?>" class="btn btn-hapus" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="<?= base_url('index.php/mahasiswa/cetak'); ?>" target="_blank" class="btn btn-print">🖨 Cetak</a>

</body>
</html>
