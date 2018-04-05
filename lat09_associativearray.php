<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>associative array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
// associative array
// key => isi
$data = array( 'nama' => 'Wawan',
                'umur' => 22,
                'pekerjaan' => 'Programmer');

print_r($data);

    $data['nama'] = 'Amir';// mengubah key
    echo '<br>';
    echo 'namanya adalah '.$data['nama'];

?>    
</body>
</html>