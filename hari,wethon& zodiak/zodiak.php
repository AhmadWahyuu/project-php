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
                    $zodiak = array("Pisces","Aries", "Gemini", "Cancer", "Leo", "Virgo", "Libra", "Scorpio", "Sagitarius", "Capricon","Aquarius");
                    $str = checkdate($input1,$input,$input2);
                    if($str==true){
                        for($i=0;$i<=11;$i++){
                            if(($input>=20 && $input1==($i+1))||($input<=19 && $input1==($i+2))){
                                echo $zodiak[($i)];
                            }elseif($input<=19 && $input1==1){
                                echo $zodiak[10];
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
                    $zodiak = array("Aquarius","Pisces","Aries", "Gemini", "Cancer", "Leo", "Virgo", "Libra", "Scorpio", "Sagitarius", "Capricon");
                    if($str1==true && $str2==true){
                        for($i=1;$i<11;$i++){
                            $akhir = 0;
                            if($i==1){
                                $akhir = 12;
                            }else{$akhir = $i-1;}
                            if(($tanggal1>=20 && $bulan1==$akhir)||($tanggal1<=19 && $bulan1==$i)){
                                echo $zodiak[($i-1)];
                                if(($tanggal2>=20 && $bulan2==$akhir)||($tanggal2<=19 && $bulan2==$i)){
                                    echo $zodiak[($i-1)];
                                }elseif(($tanggal2>=20 && $bulan2==($akhir-1)) || ($tanggal2<=19 && $bulan2==$akhir)){
                                    echo $zodiak[($akhir-2)];
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
<!-- if(($tanggal1>=20 &&   $bulan1==1)||($tanggal1<=19 && $bulan1==2)){
                            echo "<br>Kemungkinan pertama : Aquarius";
                            if(($tanggal2>=20 &&   $bulan2==1)||($tanggal2<=19 && $bulan2==2)){
                                echo "<br>Kemungkinan kedua : Aquarius";
                            }elseif(($tanggal2>=19 && $bulan2==2)||($tanggal2<=21 && $bulan2==3)){
                                echo "<br>Kemungkinan kedua: Pisces";
                            }elseif(($tanggal2>=23 && $bulan2==12)||($tanggal2<=19 && $bulan2==1)){
                                echo "<br>Kemungkinan kedua: Capricon";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=19 && $bulan1==2)||($tanggal1<=21 && $bulan1==3)){
                            echo "<br>Kemungkinan pertama : Pisces";
                            if(($tanggal2>=19 && $bulan2==2)||($tanggal2<=21 && $bulan2==3)){
                                echo "<br>Kemungkinan kedua : Pisces";
                            }elseif(($tanggal2>=20 && $bulan2==1)||($tanggal2<=19 && $bulan2==2)){
                                echo "<br>Kemungkinan kedua: Aquarius";
                            }elseif(($tanggal2>=21 && $bulan2==3)||($tanggal2<=20 && $bulan2==4)){
                                echo "<br>Kemungkinan kedua: Aries";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=21 && $bulan1==3)||($tanggal1<20 && $bulan1==4)){
                            echo "<br>Kemungkinan pertama : Aries";
                            if(($tanggal2>=21 && $bulan2==3)||($tanggal2<20 && $bulan2==4)){
                                echo "<br>Kemungkinan kedua : Aries";
                            }elseif(($tanggal2>=19 && $bulan2==2)||($tanggal2<=21 && $bulan2==3)){
                                echo "<br>Kemungkinan kedua: Pisces";
                            }elseif(($tanggal2>=20 && $bulan2==4)||($tanggal2<21 && $bulan2==5)){
                                echo "<br>Kemungkinan kedua: Taurus";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=20 && $bulan1==4)||($tanggal1<21 && $bulan1==5)){
                            echo "<br>Kemungkinan pertama : Taurus";
                            if(($tanggal2>=20 && $bulan2==4)||($tanggal2<21 && $bulan2==5)){
                                echo "<br>Kemungkinan kedua : Taurus";
                            }elseif(($tanggal2>=21 && $bulan2==3)||($tanggal2<=20 && $bulan2==4)){
                                echo "<br>Kemungkinan kedua: Aries";
                            }elseif(($tanggal2>=21 && $bulan2==5)||($tanggal2<21 && $bulan2==6)){
                                echo "<br>Kemungkinan kedua: Gemini";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=21 && $bulan1==5)||($tanggal1<21 && $bulan1==6)){
                            echo "<br>Kemungkinan pertama : Gemini";
                            if(($tanggal2>=21 && $bulan2==5)||($tanggal2<21 && $bulan2==6)){
                                echo "<br>Kemungkinan kedua : Gemini";
                            }elseif(($tanggal2>=20 && $bulan2==4)||($tanggal2<21 && $bulan2==5)){
                                echo "<br>Kemungkinan kedua: Taurus";
                            }elseif(($tanggal2>=21 && $bulan2==6)||($tanggal2<23 && $bulan2==7)){
                                echo "<br>Kemungkinan kedua: Cancer";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=21 && $bulan1==6)||($tanggal1<23 && $bulan1==7)){
                            echo "<br>Kemungkinan pertama : Cancer";
                            if(($tanggal2>=21 && $bulan2==6)||($tanggal2<23 && $bulan2==7)){
                                echo "<br>Kemungkinan kedua : Cancer";
                            }elseif(($tanggal2>=21 && $bulan2==5)||($tanggal2<21 && $bulan2==6)){
                                echo "<br>Kemungkinan kedua: Gemini";
                            }elseif(($tanggal2>=23 && $bulan2==7)||($tanggal2<23 && $bulan2==8)){
                                echo "<br>Kemungkinan kedua: Leo";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=23 && $bulan1==7)||($tanggal1<23 && $bulan1==8)){
                            echo "<br>Kemungkinan pertama : Leo";
                            if(($tanggal2>=23 && $bulan2==7)||($tanggal2<23 && $bulan2==8)){
                                echo "<br>Kemungkinan kedua : Leo";
                            }elseif(($tanggal2>=21 && $bulan2==6)||($tanggal2<=23 && $bulan2==7)){
                                echo "<br>Kemungkinan kedua: Cancer";
                            }elseif(($tanggal2>=23 && $bulan2==8)||($tanggal2<23 && $bulan2==9)){
                                echo "<br>Kemungkinan kedua: Virgo";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=23 && $bulan1==8)||($tanggal1<23 && $bulan1==9)){
                            echo "<br>Kemungkinan pertama : Virgo";
                            if(($tanggal2>=23 && $bulan2==8)||($tanggal2<23 && $bulan2==9)){
                                echo "<br>Kemungkinan kedua : Virgo";
                            }elseif(($tanggal2>=23 && $bulan2==7)||($tanggal2<23 && $bulan2==8)){
                                echo "<br>Kemungkinan kedua: Leo";
                            }elseif(($tanggal2>=23 && $bulan2==9)||($tanggal2<=22 && $bulan2==10)){
                                echo "<br>Kemungkinan kedua: Libra";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=23 && $bulan1==9)||($tanggal1<=22 && $bulan1==10)){
                            echo "<br>Kemungkinan pertama : Libra";
                            if(($tanggal2>=23 && $bulan2==9)||($tanggal2<=22 && $bulan2==10)){
                                echo "<br>Kemungkinan kedua : Libra";
                            }elseif(($tanggal2>=23 && $bulan2==8)||($tanggal2<23 && $bulan2==9)){
                                echo "<br>Kemungkinan kedua: Virgo";
                            }elseif(($tanggal2>=23 && $bulan2==10)||($tanggal2<=22 && $bulan2==11)){
                                echo "<br>Kemungkinan kedua: Scorpio";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=23 && $bulan1==10)||($tanggal1<=22 && $bulan1==11)){
                            echo "<br>Kemungkinan pertama : Scorpio";
                            if(($tanggal2>=23 && $bulan2==10)||($tanggal2<=22 && $bulan2==11)){
                                echo "<br>Kemungkinan kedua : Scorpio";
                            }elseif(($tanggal2>=23 && $bulan2==9)||($tanggal2<=22 && $bulan2==10)){
                                echo "<br>Kemungkinan kedua: Libra";
                            }elseif(($tanggal2>=23 && $bulan2==11)||($tanggal2<=22 && $bulan2==12)){
                                echo "<br>Kemungkinan kedua: Sagitarius";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=23 && $bulan1==11)||($tanggal1<=22 && $bulan1==12)){
                            echo "<br>Kemungkinan pertama : Sagitarius";
                            if(($tanggal2>=23 && $bulan2==11)||($tanggal2<=22 && $bulan2==12)){
                                echo "<br>Kemungkinan kedua : Sagitarius";
                            }elseif(($tanggal2>=23 && $bulan2==10)||($tanggal2<=22 && $bulan2==11)){
                                echo "<br>Kemungkinan kedua: Scorpio";
                            }elseif(($tanggal2>=23 && $bulan2==12)||($tanggal2<=19 && $bulan2==1)){
                                echo "<br>Kemungkinan kedua: Capricon";
                            }else{echo "<br>rentang terlalu jauh";}
                        }else if(($tanggal1>=23 && $bulan1==12)||($tanggal1<=19 && $bulan1==1)){
                            echo "<br>Kemungkinan pertama : Capricon";
                            if(($tanggal2>=23 && $bulan2==12)||($tanggal2<=19 && $bulan2==1)){
                                echo "<br>Kemungkinan kedua : Capricon";
                            }elseif(($tanggal2>=23 && $bulan2==11)||($tanggal2<=22 && $bulan2==12)){
                                echo "<br>Kemungkinan kedua: Sagitarius";
                            }elseif(($tanggal2>=20 && $bulan2==1)||($tanggal2<=19 && $bulan2==2)){
                                echo "<br>Kemungkinan kedua: Aquarius";
                            }else{echo "<br>rentang terlalu jauh";}
                        } -->