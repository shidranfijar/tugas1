
<?php
include "koneksi.php";

mysqli_query($kon, "update syllabus set  
nama = '$_POST[nama]',
kota = '$_POST[kota]'
where id = '$_POST[id]'");

echo "Data barang telah diubah";
echo "<meta http-equiv=refresh content=1;URL='index.php'>";


if(isset($_POST['submit'])){
}

?>
