<?php
$data = array( 'nama' => 'Wawan',
            'umur' => 22,
            'pekerjaan' => 'Programmer');

$data2 = array( 'laptop' => 'Asus',
                'kursi' =>'belum ada'); 

/*
values = mengambil nilai
keys = mengambil key
merge = menggabungkan

*/


print_r(array_values($data));
echo '<br>';
print_r(array_keys($data));
echo '<br>';
print_r(array_merge($data,$data2));
?>