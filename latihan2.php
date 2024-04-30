<?php
// variabel dalam php
$txt = "Selamat datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo '<body style="background-color: lightyellow;">';
echo "<p>Isi Vareabel txt adalah: $txt</p>";
echo "<p>Isi Vareabel x adalah: $x</p>";
echo "<p>Isi Vareabel txt adalah: $y</p>";
echo "Belajar PHP di" . $txt2 . "<br>";
echo $x + $y;

// PHP konstanta
define("nama_konstanta", "{Elda Serlya}");
echo "<br>".nama_konstanta;

?>