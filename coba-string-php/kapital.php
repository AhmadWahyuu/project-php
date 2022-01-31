<?php
$str = "AHMAD waHyU rAfsaN zaNi";
$var = strtolower($str);
$var1 = strtoupper($str);
$var2 = ucfirst($var);
$var3 = ucwords($var);

echo "text awal = $str menjadi $var<br>";
echo "text awal = $str menjadi $var1<br>";
echo "text awal = $var menjadi $var2<br>";
echo "text awal = $var menjadi $var3<br>";

?>