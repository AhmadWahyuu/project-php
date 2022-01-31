<?php
$angka = 72;
$str = chr($angka);
// output huruf "H" kapital
$angka1 = 100;
$str1 = chr($angka1);
// output huruf "d" kecil
$angka2 = 55;
$str2 = chr($angka2);
// output angka 7

echo "character dengan kode $angka = $str <br>";
echo "character dengan kode $angka1 = $str1 <br>";
echo "character dengan kode $angka2 = $str2 <br><br>";

$ord = ord($str);
$ord1 = ord($str1);
$ord2 = ord($str2);

echo "char $str setelah dijadikan angka ASCII = $ord <br>";
echo "char $str1 setelah dijadikan angka ASCII = $ord1 <br>";
echo "char $str2 setelah dijadikan angka ASCII = $ord2 <br>";
?>
<!-- https://santriinformatika.wordpress.com/2013/02/26/fungsi-string-pada-php/ -->
<!-- https://deladesember.wordpress.com/2013/03/01/macam-macam-fungsi-string-php/ -->