<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="/CIPPAAA/public/css/style.css?v=5">

</head>
<body>
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>
<?php endif; ?>  
<h2>Data Mahasiswa</h2>

<a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-tambah">+ Tambah</a>
<br><br>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['id_mahasiswa']; ?></td>
                <td><?= $m['NIM']; ?></td>
                <td><?= $m['nama_mhs']; ?></td>
                <td><?= $m['nama_prodi']; ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/edit/'.$m['id_mahasiswa']); ?>" class="btn btn-edit">Edit</a>
                    <a href="<?= base_url('mahasiswa/hapus/'.$m['id_mahasiswa']); ?>" class="btn btn-hapus" onclick="return confirm('Hapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<br>
<a href="<?= base_url('mahasiswa/cetak'); ?>" target="_blank" class="btn btn-print">Print</a>

</body>
</html>