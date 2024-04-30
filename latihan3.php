<?php
$x = 5;
$y = 10;

//Aritmetic operators
echo "Penambahan " . ($x + $y) . "<br>";
echo "Pengurangan " . ($x - $y) . "<br>";
echo "Perkalian " . ($x * $y) . "<br>";
echo "Pembagian " . ($x / $y) . "<br>";
echo "Modulus " . ($x % $y) . "<br>";
echo "Exponensial " . ($x ** $y) . "<br>";
echo "<br>";

//Assignment operators
$x += 2; // $x = $x + 2
$y *= 2; // $y = $y * 2
echo "Penambahan x " .$x. "<br>";
echo "Perkalian y " .$y. "<br>";
echo "<br>";

// Increment/Decrement operators
echo "Isi ++x = " .++$x. "<br>";
echo "Isi x++ = " .$x++. "<br>";
echo "Isi x = " .$x. "<br>";
echo "<br>";
echo "Isi --y = " .--$y. "<br>";
echo "Isi y-- = " .$y--. "<br>";
echo "Isi y = " .$y. "<br>";
echo "<br>";
echo '<body style="background-color: azure;">';

// Conditional assignment operators
$user = "Elda Serlya";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status ."<br>";
// variabel $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";

?>
