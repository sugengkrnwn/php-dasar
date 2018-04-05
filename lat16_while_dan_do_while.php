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
    <h2>While dan do while</h2>
    <?php
    
    $pekerjaan = ['programmer','dokter','polisi','guru'];
    $i = 0;
    // while(syarat)
    /*

    while ($i < count($pekerjaan)) {
        echo $pekerjaan[$i].'<br>';
        $i++;
    }
*/

    // do while
    do {
        echo $pekerjaan[$i].'<br>';
        $i++;
    } while ($i < count($pekerjaan));


    ?>    
</body>
</html>