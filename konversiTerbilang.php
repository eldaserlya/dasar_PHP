<!DOCTYPE html>
<html>
<head>
    <title>Konversi Angka Terbilang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }
        .container {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konversi Angka Terbilang</h2>
        <?php
            $angka = 9; 
            $terbilang = '';

            switch ($angka) {
                case 1:
                    $terbilang = 'satu';
                    break;
                case 2:
                    $terbilang = 'dua';
                    break;
                case 3:
                    $terbilang = 'tiga';
                    break;
                case 4:
                    $terbilang = 'empat';
                    break;
                case 5:
                    $terbilang = 'lima';
                    break;
                case 6:
                    $terbilang = 'enam';
                    break;
                case 7:
                    $terbilang = 'tujuh';
                    break;
                case 8:
                    $terbilang = 'delapan';
                    break;
                case 9:
                    $terbilang = 'sembilan';
                    break;
                default:
                    $terbilang = 'Angka diluar rentang';
            }

            echo "<p>$angka dalam terbilang adalah: $terbilang</p>";
        ?>
    </div>
</body>
</html>