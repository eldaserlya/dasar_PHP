<!DOCTYPE html>
<html>
<head>
    <title>Latihan Perulangan</title>
</head>
<body bgcolor="thistle">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>