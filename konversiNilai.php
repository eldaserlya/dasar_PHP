<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body bgcolor="cyan">
    <form method="POST" action="">
        Masukkan nilai angka: <input type="text" name="nilai">
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nilai = $_POST['nilai'];

        if ($nilai >= 0 && $nilai <= 59) {
            $hurufNilai = 'C';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $hurufNilai = 'BC';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $hurufNilai = 'B';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            $hurufNilai = 'AB';
        } elseif ($nilai >= 90 && $nilai <= 100) {
            $hurufNilai = 'A';
        } else {
            $hurufNilai = 'Nilai tidak valid';
        }

        echo "Nilai Angka: $nilai <br>";
        echo "Predikat Nilai: $hurufNilai";
    }
    ?>
</body>
</html>