<?php

echo '<body style="background-color: burlyWood;">';

function hitungPecahan($jumlahUang) {
    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
    $jumlahPecahan = array();

    foreach ($pecahan as $nilai) {
        $jumlah = floor($jumlahUang / $nilai);
        $jumlahUang %= $nilai;
        $jumlahPecahan[$nilai] = $jumlah;
    }

    return $jumlahPecahan;
}

$jumlahUang = 1387500;
$pecahanUang = hitungPecahan($jumlahUang);

foreach ($pecahanUang as $nilai => $jumlah) {
    echo "Jumlah pecahan Rp. " . number_format($nilai) . " = " . $jumlah . " lembar<br/>";
}
?>
