<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h2>foreach</h2>
<?php

    $barang =array('kursi','meja','kipas');
    
    foreach($barang as $a){
                echo $a,'<br>';
    }

?>        
</body>
</html>