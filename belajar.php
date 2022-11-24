
<form action="http://localhost/belajar/belajar.php" method = "GET">
  <label for="fname">Masukin Angka:</label><br>
  <input type="text" name="Angka" ><br><br>
  <input type="submit" value="Submit">
</form>

<?php


$input = $_GET['Angka'];
echo "input = $input<br/>";

for ($i = 1; $i <= $input; $i++) { 
    for ($j = 1; $j <= $i; $j++) { 
        echo "$i "; 
    }
    echo "<br/>"; 
}

?>