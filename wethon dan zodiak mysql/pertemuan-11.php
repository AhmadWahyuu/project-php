<?php
include 'database.php';
$db = new database();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="zodiak.php" class="nav-link">Zodiak</a></li>
                    <li class="nav-item"><a href="weton.php" class="nav-link" >Wethon</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background:url('assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Masukkan kalimat untuk menampilkan Hari</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form method="post">
                        <div class="row">
                            <input type="hidden" name="hari" value="ya">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="text" placeholder="masukkan sebuah kalimat..." name="inputan"></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">submit</button></div>
                        </div>
                    </form>
                </div>
            <?php
                if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['hari'])){
                    echo "<div class='card shadow-lg border-0 my-5'>
                            <div class='card-body p-0'>
                                <div class='card-body p-0'>
                                    <div class='p-5'>
                                        <div class='text-center'>
                                            <div class='text-dark'>";
                    $hari = $db->tampil_hari();
                    $str = array("pertama" =>$hari[0]['hari'],"kesatu" => $hari[0]['hari'], "kedua" => $hari[1]['hari'], "ketiga" => $hari[2]['hari'], "keempat"=>$hari[3]['hari'], "kelima"=>$hari[4]['hari'], "keenam"=>$hari[5]['hari'], "ketujuh"=>$hari[6]['hari'],"awal"=>$hari[0]['hari'],"akhir"=>$hari[6]['hari'],"1"=>$hari[0]['hari'],"2"=>$hari[1]['hari'],"3"=>$hari[2]['hari'],"4"=>$hari[3]['hari'],"5"=>$hari[4]['hari'],"6"=>$hari[5]['hari'],"7"=>$hari[6]['hari']);
                    $var = $_POST['inputan'];
                    $flag= 0;
                    foreach($str as $cari => $key){
                        if(preg_match("/$cari/i", $var)){
                            echo $key;
                            $flag = 1;
                            echo "<br>";
                        }else if($flag != 1){
                            $flag = 0;
                        }
                    }
                    if($flag == 0){
                        echo "Format Kalimat Salah";
                    }
                    echo "</div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            </div>
                                                </div>";
                }
            ?>
            </div>
            <div class="col-sm-6">
            <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Masukkan kalimat untuk menampilkan Bulan</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form method="post"">
                        <div class="row">
                            <input type="hidden" name="bulan" value="ya">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="text" placeholder="masukkan sebuah kalimat..." name="inputan1"></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">submit</button></div>
                        </div>
                    </form>
                </div>
                <?php
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['bulan'])){
                        $var1 = $_POST['inputan1'];
                        // $month = $db->tampil_bulan();
                        $i = 0;
                        $bulan = [];
                        foreach($db->tampil_bulan() as $x){
                            $bulan[$i]=array("Masehi"=>$x['masehi'],"Hijriah"=>$x['hijriah'],"Jawa"=>$x['jawa']);
                            $i++;
                        }
                        // $bulan = array(array("Masehi"=>$month[0]['masehi'], "Hijriah"=>$month[0]['hijriah'], "Jawa"=>$month[0]['jawa']),array("Masehi"=>$month[1]['masehi'], "Hijriah"=>$month[1]['hijriah'], "Jawa"=>$month[1]['jawa']),array("Masehi"=>$month[2]['masehi'], "Hijriah"=>$month[2]['hijriah'], "Jawa"=>$month[2]['jawa']),array("Masehi"=>$month[3]['masehi'], "Hijriah"=>$month[3]['hijriah'], "Jawa"=>$month[3]['jawa']),array("Masehi"=>$month[4]['masehi'], "Hijriah"=>$month[4]['hijriah'], "Jawa"=>$month[4]['jawa']),array("Masehi"=>" Juni","Hijriah"=>" Jumadil Tsaniyah","Jawa"=>" Jumadil Akhir"),array("Masehi"=>" Juli","Hijriah"=>" Rajab","Jawa"=>" Rejeb"),array("Masehi"=>" Agustus","Hijriah"=>" Sya'ban","Jawa"=>" Ruwah"),array("Masehi"=>" September","Hijriah"=>" Ramadhan","Jawa"=>" Pasa"),array("Masehi"=>" Oktober","Hijriah"=>" Syawwal", "Jawa"=>" Sawal"),array("Masehi"=>" November","Hijriah"=>" Dzulqa'dah","Jawa"=>" Dulkaidah"),array("Masehi"=>" Desember","Hijriah"=>" Dzulhijjah","Jawa"=>" Besar"));
                        $str1 = array("pertama"=>$bulan[0],"kesatu"=>$bulan[0], "kedua"=>$bulan[1], "ketiga"=>$bulan[2], "keempat"=>$bulan[3], "kelima"=>$bulan[4], "keenam"=>$bulan[5], "ketujuh"=>$bulan[6],"kedelapan"=>$bulan[7],"kesembilan"=>$bulan[8],"kesupuluh"=>$bulan[9],"kesebelas"=>$bulan[10],"keduabelas"=>$bulan[11],"awal"=>$bulan[0],"akhir"=>$bulan[11],"1"=>$bulan[0],"2"=>$bulan[1],"3"=>$bulan[2],"4"=>$bulan[3],"5"=>$bulan[4],"6"=>$bulan[5],"7"=>$bulan[6],"8"=>$bulan[7],"9"=>$bulan[8],"10"=>$bulan[9],"11"=>$bulan[10],"12"=>$bulan[11]);
                        echo "<div class='card shadow-lg border-0 my-5'>
                            <div class='card-body p-0'>
                                <div class='card-body p-0'>
                                    <div class='p-5'>
                                        <div class='text-center'>
                                            <div class='text-dark'>";
                        // perulangan untuk mencari string
                        $flag2=0;
                        foreach($str1 as $cari1=>$keys){
                            $flag1=0;
                            // mencari string sesuai string yang ingin dicari meskipun berbeda kapital maupun kecil
                            if(preg_match("/$cari1/i",$var1)){
                                foreach($keys as $cari2=>$keys1){
                                    if(preg_match("/$cari2/i",$var1)){
                                        echo $keys1;
                                        $flag1 = 1;
                                    }elseif($flag1 != 1){
                                        $flag1 = 0;
                                    }
                                }
                                if($flag1 == 0){
                                    foreach($keys as $prin=>$kunci){
                                        echo $prin.":".$kunci."<br>";
                                    }
                                }
                                $flag2 = 1;
                            }else if($flag2 != 1){
                                $flag2 = 0;
                            }
                        }
                        if($flag2==0){
                            echo "Format Kalimat Tidak Ada";
                        }
                        echo "</div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            </div>
                                                </div>";
                    }
                ?>
            </div>
            </div>                      
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>