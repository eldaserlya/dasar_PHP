<?php
    echo '<body style="background-color: mistyRose;">';

    $gaji_pokok = 3250000; 
    $tunjangan = 1200000; 

    // Menghitung gaji kotor
    $gaji_kotor = $gaji_pokok + $tunjangan; 
    $pajak = 0.1;
    
    // Menghitung pajak penghasilan
    $pajak_penghasilan = $gaji_kotor * $pajak;

    // Menghitung gaji bersih
    $gaji_bersih = $gaji_kotor - $pajak_penghasilan; 
    
    echo "Gaji bersih yang diterima Obi setiap bulan: Rp. " . number_format($gaji_bersih, 0, ',', '.');
?>