<!DOCTYPE html>
<html>
<head>
    <title>Keliling Lingkaran</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFEFD5;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #008080;
        }
        
        .result {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Keliling Lingkaran</h1>

        <?php
        $jari = 15;
        $keliling = 2 * 3.14 * $jari;
        echo "<div class='result'>Keliling lingkaran dengan jari-jari 15 cm adalah: " . $keliling . " cm</div>";
        ?>

    </div>
</body>
</html>
