<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>operator logika</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        <h2>Operator logika</h2>
    <?php
        $password1 = '123';
        $password2 = '123';
        if($password1 == $password2){
            echo "password benar";
        } else{
            echo "password salah";
        }
    ?>
<?php echo '<br>'?>

    <?php
        $password1 = '1234';
        $password2 = 1234;
        if($password1 === $password2){
            echo "password benar";
        } else{
            echo "password salah";
        }
    ?>    
<?php echo '<br>'?>

    <?php
        $password1 = '123';
        $password2 = '123';
        if($password1 > $password2){
            echo "password benar";
        } else{
            echo "password salah";
        }
    ?>
<?php echo '<br>'?>
    <?php
        $password1 = '123';
        $password2 = '1232';
        if($password2 >= $password1){
            echo "password benar";
        } else{
            echo "password salah";
        }
        ?>
    <?php echo '<br>'?>
    <?php
        $password1 = '123';
        $password2 = '1232';
        if($password2 < $password1){
            echo "password benar";
        } else{
            echo "password salah";
        }
    ?>  
        <?php echo '<br>'?>
    <?php
        $password1 = '123';
        $password2 = '1232';
        if($password2 <= $password1){
            echo "password benar";
        } else{
            echo "password salah";
        }
        ?>
        <?php echo '<br>'?>
    <?php
        $password1 = '123';
        $password2 = '1232';
        if($password2 != $password1){
            echo "password benar";
        } else{
            echo "password salah";
        }
    ?>
    <?php
    /*
    hasilnya 
    password benar 
    password salah
    password salah
    password benar
    password salah
    password salah
    password benar 
    */
    ?>
</body>
</html>