<?php

echo '<body style="background-color: aliceBlue;">';

$siswa = array(
    array("No urut" => 1, "Poin" => 75, "Siswa" => "Adi"),
    array("No urut" => 2, "Poin" => 80, "Siswa" => "Joni"),
    array("No urut" => 3, "Poin" => 65, "Siswa" => "Jihan"),
    array("No urut" => 4, "Poin" => 70, "Siswa" => "Aya"),
    array("No urut" => 5, "Poin" => 85, "Siswa" => "Ita"),
    array("No urut" => 6, "Poin" => 90, "Siswa" => "Budi"),
    array("No urut" => 7, "Poin" => 95, "Siswa" => "Tini"),
    array("No urut" => 8, "Poin" => 65, "Siswa" => "Sari"),
);

// menampilkan poin siswa dengan nomor urut 5
foreach ($siswa as $data) {
    if ($data["No urut"] == 5) {
        echo "Poin siswa dengan nomor urut 5 adalah : " . $data["Poin"] . "<br>";
    }
}

// menampilkan nama siswa yang memiliki poin 90
echo "Nama semua siswa yang memiliki poin 90 : ";
foreach ($siswa as $data) {
    if ($data["Poin"] == 90) {
        echo $data["Siswa"] . "<br>";
    }
}

// menampilkan nama siswa yang memiliki poin 100
echo "Nama semua siswa yang memiliki poin 100 : ";
$found = false;
foreach ($siswa as $data) {
    if ($data["Poin"] == 100) {
        echo $data["Siswa"] . "<br>";
        $found = true;
    }
}

if (!$found) {
    echo "Tidak ada satupun siswa yang memiliki poin 100";
}

?>
