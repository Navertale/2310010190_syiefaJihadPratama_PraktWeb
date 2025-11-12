<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
        @media print {
            button { display: none; }
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
    </tr>

    <?php $no=1; foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $m['NIM']; ?></td>
        <td><?= $m['nama_mhs']; ?></td>
        <td><?= $m['nama_prodi']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>
<button onclick="window.print()">🖨 Cetak</button>

</body>
</html>
