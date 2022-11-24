<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa AIDBC </title>
    <style>
        table tr td {
            border: 1px solid black;
            padding: 10px;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Mahasiswa AIDBC </h2>
    <table>
        <thead>
            <tr>
                <td>Menu</td>
                <td>Id</td>
                <td>Nama</td>
                <td>kota</td>
                <td>Tanggal</td>             
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $query = mysqli_query($kon, 'SELECT * FROM syllabus ORDER BY id');
        while($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td>
                    <a href="edit.php?id=<?= $data['id']; ?>">ubah</a>
                </td>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama'] ?></td>                       
                <td><?= $data['kota'] ?></td>
                <td><?= $data['tanggal'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>