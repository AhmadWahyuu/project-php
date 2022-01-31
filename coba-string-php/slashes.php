<?php
$text = "Sekarang Hari Jum'at";

$slashes = addslashes($text);
echo "kata awal = $text, setelah ditambahkan slash = $slashes <br>";

$hasil = stripslashes($slashes);
echo "Hasil pengembalian slashes = $hasil";
?>
<!-- https://deladesember.wordpress.com/2013/03/01/macam-macam-fungsi-string-php/ -->
<!-- slashes fungsinya yaitu menambahkan "/" kedalam string yang memiliki tanda petik 1 seperti kata jum'at -->