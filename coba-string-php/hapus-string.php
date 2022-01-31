<?php
$str = "/ahmad Wahyu/";
// menghapus string didepan
$var = ltrim($str, '/');
echo "text awal = $str <br>";
echo "text menjadi = $var <br>";

// menghapus string dibelakang
$var1 = rtrim($str, '/');
echo "text awal = $str <br>";
echo "text menjadi = $var1<br>";

$var2 = trim($str,'/');
echo "text awal = $str <br>";
echo "text menjadi = $var2";
?>