<?php
$nama = array('Agung','wawan','anis','gilang','Agung');
$hewan = ['kucing','harimau','kelinci','kerbau'];

/*
Belajar pemrogaman php
Sugeng kurniawan

"Learning by Doing"
*/

print_r($nama);//print array
echo '<br>';
print_r($hewan);//print array
echo '<br>';
echo '<br>';
print_r(array_unique($nama));//menampilkan data uniq
echo '<br>';
print_r(array_search('wawan',$nama));//pencarian di dalam array
echo '<br>';
print_r(array_reverse($nama));//membalikan urutan
echo '<br>';
shuffle($hewan);//acak
print_r($hewan);
echo '<br>';
echo count($hewan);//menjumlah isi array
echo '<br>';

sort($nama);
print_r($nama);
?>