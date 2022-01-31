<?php
$author = "Ahmad Wahyu";
$title = "student";
$npm = "19081010119";
$umur = 20;
// fungsi menampilkan satu atau lebih data string kedalam browser
echo $author,$title,$npm,$umur,"<br>";
// syntax untuk menampilkan satu data
// print $author,$npm,$title;
print $author;
// syntax printf hampir sama seperti syntax di C
printf ("<br>%s %s %s %d",$author,$title,$npm,$umur);
?>