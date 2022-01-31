<?php
$str = htmlspecialchars_decode("Jika dengan decode <a href='coba.html'>tes</a>", ENT_QUOTES);
echo "$str";
$str1 = htmlspecialchars("<br><a href='coba.html'>tes</a>", ENT_QUOTES);
echo $str1;
?>