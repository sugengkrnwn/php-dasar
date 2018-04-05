<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>if bercabang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>if bercabang</h2>
    <?php
        $uang_a = 1000;
        $uang_b = 5000;
        $harga_kopi = 2000;

        if ($uang_a > $harga_kopi || $uang_b > $harga_kopi) {
            echo " bisa dibeli";
        } else{
            echo "uangnya tidak cukup";
        }
    ?>
</body>
</html>