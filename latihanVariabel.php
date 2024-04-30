<?php

echo '<body style="background-color: LavenderBlush;">';

$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

foreach($hari as $index => $nama_hari) {
    $style = "style='font-family: cursive; color: #C71585; font-size: 16px;'";
    echo "<p $style>Hari " . ($index+1) . ": $nama_hari</p>";
}
?>