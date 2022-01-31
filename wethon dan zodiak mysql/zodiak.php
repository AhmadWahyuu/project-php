<?php
include 'database.php';
$db = new database();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiak</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand bg-black navigation-clean">
        <div class="container">
            <button data-bs-tonggle="collapse" class="navbar-tonggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="pertemuan-11.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="weton.php" class="nav-link">Weton</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-light masthead" style="background :url('assets/img/bg-showcase-2.jpg')no-repeat center center;background-size:cover;">
        <div class="container">
        <h1 class="mb-5">Menampilkan zodiak berdasarkan tanggal lahir</h1>
        <form action="" method="post">
            <div class="row">
                <div class="col-2 col-sm-12">
                <input type="hidden" name="zodiak" value="ya">
                <input type="number" name="tanggal" value="1">
                <select name="bulan" id="bulan">
                    <?php $var = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        $i = 1;
                        foreach($var as $bulan){
                            echo "<option value='$i'>$bulan</option>";
                            $i++;
                        }
                    ?></select>
                <input type="number" name="tahun" value="1998"></div>
                <div class="col-3 col-sm-12"><button class="btn btn-primary btn-lg" type="submit">submit</button></div>
            </div>
        </form>    
        <div class="row mb-3">
            <?php
                if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['zodiak'])){
                    echo "<div class='card shadow-lg border-0 my-5'>
                        <div class='card-body p-0'>
                        <div class='p-5'>
                        <div class='text-center text-dark'>";
                    $input=$_POST['tanggal'];
                    $input1=$_POST['bulan'];
                    $input2=$_POST['tahun'];
                    // $zodiak = array("Pisces","Aries", "Gemini", "Cancer", "Leo", "Virgo", "Libra", "Scorpio", "Sagitarius", "Capricon","Aquarius");
                    $str = checkdate($input1,$input,$input2);
                    if($str==true){
                        foreach($db->tampil_zodiak() as $x){
                            $tanggal = explode("-",$x['tanggal']);
                            if(($input>=$tanggal[0] && $input1==$tanggal[1]) || ($input<=$tanggal[2] && $input1==$tanggal[3])){
                                echo "<Strong>".$x['nama']."</Strong><br>".$x['keterangan'];
                            }
                        }
                    }else{
                        echo "tanggal tidak ditemukan";
                    }
                    echo "</div></div></div></div>";
                }
            ?>
            </div>
            <h1 class="mb-5">Menampilkan zodiak berdasarkan rentang tanggal lahir</h1>
        <form action="" method="post">
            <div class="row">
                <div class="col-6 col-sm-12">
                <input type="hidden" name="rentang" value="ya">
                <input type="number" name="tanggal1" value="1">
                <select name="bulan1">
                    <?php
                        $i = 1;
                        foreach($var as $bulan){
                            echo "<option value='$i'>$bulan</option>";
                            $i++;
                        }
                    ?></select></div>
                <div class="col-6 col-sm-12">
                <input type="number" name="tanggal2" value="1">
                <select name="bulan2">
                    <?php
                        $i = 1;
                        foreach($var as $bulan){
                            echo "<option value='$i'>$bulan</option>";
                            $i++;
                        }
                    ?></select>
                </div>
                <div class="col-6 col-sm-12"><input type="number" name="tahun1" value="1998"></div>
                <div class="col-3 col-sm-12"><button class="btn btn-primary btn-lg" type="submit">submit</button></div>
            </div>
        </form>    
        <div class="row mb-3">
            <?php
                if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['rentang'])){
                    echo "<div class='card shadow-lg border-0 my-5'>
                        <div class='card-body p-0'>
                        <div class='p-5'>
                        <div class='text-center text-dark'>";
                    $tanggal1 =$_POST['tanggal1'];
                    $tanggal2 =$_POST['tanggal2'];
                    $bulan1=$_POST['bulan1'];
                    $bulan2=$_POST['bulan2'];
                    $tahun1=$_POST['tahun1'];
                    $str1 = checkdate($bulan1,$tanggal1,$tahun1);
                    $str2 = checkdate($bulan2,$tanggal2,$tahun1);
                    if($str1==true && $str2==true){
                        foreach($db->tampil_zodiak() as $x){
                            $tanggal = explode("-",$x['tanggal']);
                            if((($tanggal1>=$tanggal[0] && $bulan1==$tanggal[1]) || ($tanggal1<=$tanggal[2] && $bulan1==$tanggal[3]))&&(($tanggal2>=$tanggal[0] && $tanggal2==$bulan2[1]) || ($tanggal2<=$tanggal[2] && $bulan2==$tanggal[3]))){
                                echo "<br><Strong>".$x['nama']."</Strong><br>".$x['keterangan'];
                            }else{
                                if(($tanggal1>=$tanggal[0] && $bulan1==$tanggal[1]) || ($tanggal1<=$tanggal[2] && $bulan1==$tanggal[3])){
                                    echo "<Strong>".$x['nama']."</Strong><br>".$x['keterangan'];
                                    for($j=$bulan1+1;$j<=$bulan2;$j++){
                                        foreach($db->tampil_zodiak() as $y){
                                            $date = explode("-",$y['tanggal']);
                                            if(($tanggal2>=$date[0] && $j==$date[1]) || ($tanggal2<=$date[2] && $j==$date[3])){
                                                echo "<br><Strong>".$y['nama']."</Strong><br>".$y['keterangan'];
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        echo "tanggal tidak ditemukan";
                    }
                    echo "</div></div></div></div>";
                }
            ?>
            </div>
        </div>
    </header>
</body>
</html>