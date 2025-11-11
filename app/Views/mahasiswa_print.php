<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
    </tr>

    <?php foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['NIM']; ?></td>
        <td><?= $m['nama_mhs']; ?></td>
        <td><?= $m['nama_prodi']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<script>
    window.print();
</script>

</body>
</html>
