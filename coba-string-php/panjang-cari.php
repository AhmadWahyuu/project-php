<?php
$str = "Ahmad Wahyu Rafsan Zani";
$panjang = strlen($str);
// string atau char yang dicari jika ada dari awal maka akan mengambil diawal dan selesai
$cari = strpos($str,"a");
// string atau char yang dicari, jika terdapat diawal akan ditandani char yang sama jika samapai akhir tidak ada maka yang ditandai terakhir yang diambil
$cari1 = strrpos($str,"a");

echo "string = $str dengan panjang= $panjang<br>";

echo "huruf 'a' berada di index = $cari, ini dengan strrpos = $cari1";

?>