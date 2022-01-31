<?php
include 'database.php';
$db = new database();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weton</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand bg-dark navigation-clean">
        <div class="container">
            <button data-bs-tonggle="collapse" class="navbar-tonggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="pertemuan-11.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="zodiak.php">Zodiak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-light masthead" style="background : url('assets/img/bg-masthead.jpg')no-repeat center center;">
        <div class="container">
            <h1 class="mb-5">Menampilkan Weton</h1>
            <form action="" method="post">
                <div class="row">
                    <div class="col-2 col-sm-12">
                        <br><h2 class="mb-3">Masukkan tanggal lahir</h2>
                        <input type="hidden" name="weton" value="ya">
                        <input type="number" name="tanggal" value="1">
                        <select name="bulan">
                            <?php $var = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $i = 1;
                                foreach($var as $bulan){
                                    echo "<option value='$i'>$bulan</option>";
                                    $i++;
                                }
                            ?></select>
                        <input type="number" name="tahun" value="1999">
                        <div class="col-3 col-sm-12"><button class="btn btn-primary btn-lg">submit</button></div>
                    </div>
                </div>
            </form>
            <div class="row mb-3">
                <?php
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['weton'])){
                        echo "<div class='card shadow-lg border-0 my-5'>
                        <div class='card-body p-0'>
                        <div class='p-5'>
                        <div class='text-center text-dark'>";
                        // inisialisasi Hari dan neptu
                        $index= 0;
                        $pasaran = [];
                        foreach($db->tampil_pasaran() as $x){
                            $pasaran[$index] = $x['neptu'];
                            $index++;
                        }
                        // inisialisasi tanggal sebagai perbandingan
                        $tanggal = array("Ahad", "2021-11-21", "Legi");
                        $inp = (string)$_POST['tanggal'];
                        $inp1 = (string)$_POST['bulan'];
                        $inp2 = (string)$_POST['tahun'];
                        $date1 = date_create("$inp2-$inp1-$inp");
                        $date2 = date_create($tanggal[1]);
                        $diff = date_diff($date1,$date2);
                        $selisih = $diff->format("%a");
                        $mod = fmod($selisih,35);
                        echo $pasaran[$mod];
                        echo "</div></div></div></div>";
                    }
                ?>
            </div>
        </div>
    </header>
</body>
</html>