<?php
    $text = "Makan,Minum,Tidur,Nge-game,Mendaki";
    echo "text awal = $text";
    $kegiatan = explode(",", $text);
    echo "<p> Hasil Menggunakan fungsi Explode </p><pre>";
    print_r($kegiatan);
    echo "</pre>";

    foreach ($kegiatan as $key => $data){
        echo "$key. $data<br>";
    }

    $text1 ="id 1.nama 2.npm 3.alamat 4.asal 5.jenis kelamin";
    echo "<br>text awal = $text1";
    $mhs = preg_split("/[0-9]+./", $text1);

    echo "<p>Hasil Ketika Menggunakan fungsi preg_spilt</p><pre>";
    print_r($mhs);
    echo "</pre>";

    foreach ($mhs as $key => $x){
        echo "$key. $x<br>";
    }

    echo "<p> Hasil dari penggabungan kembali dengan implode</p>";
    echo "text = '".implode(",", $kegiatan)."'<br>";
    echo "text = '".implode(",", $mhs)."'";
?>
<!--  https://sipintek.com/cara-memisahkan-dan-menggabungkan-string-di-php/ -->