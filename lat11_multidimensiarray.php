<?php

$data =array (

        array('amir','22','designer'),
        array('wawan','22','programmer web'),
        array('sinta','21','programmer mobile')
);

print_r($data);
echo'<br>';
echo $data[1][2];
echo'<br>';
$data[1][2] = 'projek manager';
echo $data[1][2];

// multi dimensi array
?>