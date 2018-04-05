<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Else if</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $uang_a = 1000;
    $uang_b = 5000;
    $harga_kopi = 2500;

    if ($uang_a > $harga_kopi) {
        echo "bisa dibeli";
    }elseif ($uang_b >= $harga_kopi) {
        echo "di beli si b";
    }else{
        echo "uangnya tidak cukup";
    }
    ?>
</body>
</html>