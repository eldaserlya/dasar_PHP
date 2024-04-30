<?php
/* Operator logika yang bisa digunakan
* ==  Sama Dengan        $x == $y
* === Identical          $x === $y
* !=  Tidak sama dengan  $x != $y
* <>  Tidak sama dengan  $x <> $y
* !== Not identical      $x !== $y
* >   Lebih besar dari   $x > $y
* <   Kurang Dari        $x < $y
* >=  Lebih besar atau Sama dengan  $x >= $y
* <=  Kurang dari atau Sama dengan  $x <= $y
* <=> Spaceship  $x <=> $y
*/

echo '<body style="background-color: peachpuff;">';

$t = date(format: "H"); // mendapatkkan jam dengan format 1-24
echo "<br> If <br>";
if ($t < 16) {
    echo "Selamat siang!";
}

$t = date(format: "H"); // mendapatkkan jam dengan format 1-24
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br> Nested If <br>";
if ($t < 11) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo"Selamat Malam!";
}

?>

