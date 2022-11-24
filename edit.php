<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h2>Menampilkan Data Dari Database PHP</h2>
        
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM syllabus WHERE id = '$id'"; 
        $result = $kon->query($sql);
        if ($result->num_rows > 0) {
        ?>
        
        <form action="edit-update.php" method="POST"> 

        <?php 
          $data = $result->fetch_assoc();
        ?>
          
              <label for="id"> masukan id :</label><br>
              <input type="text" name="id" id="id" value="<?= $data['id'] ?>"><br>

              <label for="nama"> masukan nama :</label><br>
              <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>"><br>

              <label for="kota"> masukan kota :</label><br>
              <input type="text" name="kota" id="kota" value="<?= $data['kota'] ?>"><br>

              <label for="tanggal"> masukan tanggal :</label><br>
              <input type="text" name="tanggal" id="tanggal" value="<?= $data['tanggal'] ?>">
              <br><br>
              <button type="submit" nama="submit" value="true">Simpan</button>
        </form>
        <?php 
        }
        else  {
          echo "$result";
        }
        $kon->close();
        ?>

</body>