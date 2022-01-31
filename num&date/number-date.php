
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manipulasi Angka dan Tanggal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
</head>

<body> 
    <header class="text-center text-white masthead" style="background:url('assets/img/bg-masthead.jpg')no-repeat center center;background-size:cover;">
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Menampilkan pengalokasian Math di PHP</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form method="post">
                        <div class="row">
                            <input type="hidden" name="angka" value="ya">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <select name="math">
                                    <?php
                                        $math = array("abs","ceil","round","floor","phi","pow","sqrt","exp","fmod","intdiv","min","max","bindec","decbin","hypot","log","log10","sin","cos","tan","asin","acos","atan");
                                        foreach($math as $k){
                                            echo "<option value='$k'>$k</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">submit</button></div>
                        </div>
                    </form>
                </div>
            <?php
                echo "<div class='card shadow-lg border-0 my-5'>
                <div class='card-body p-0'>
                    <div class='card-body p-0'>
                        <div class='p-5'>
                            <div class='text-center'>
                                <div class='text-dark'>";
                if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['angka'])){
                    $pil1 = $_POST['math'];
                    switch($pil1){
                        case $math[0]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-abs'>
                            <input type='number' name='abs' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[1]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-ceil'>
                            <input type='number' name='ceil' step=0.1 value=0.1>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[2]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-round'>
                            <input type='number' name='round' step=0.1 value=0.1>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[3]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-floor'>
                            <input type='number' name='floor' step=0.1 value=0.1>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[4]:
                            echo pi();
                            break;
                        case $math[5]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-pow'>
                            <label for='pow'>angka dipangkat</label><input type='number' step=0.1 value=0 name='pow'>
                            <label for='pangkat'>pangkat</label><input type='number' name='pangkat' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[6]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-sqrt'>
                            <input type='number' name='sqrt' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[7]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-exp'>
                            <input type='number' name='exp' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[8]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-fmod'>
                            <label for='bil1'>angka</label><input type='number' step=0.1 value=0 name='bil1'>
                            <label for='bil2'>pembagi</label><input type='number' name='bil2' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[9]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-intdiv'>
                            <label for='bil1'>angka</label><input type='number' step=0.1 value=0 name='bil1'>
                            <label for='bil2'>pembagi</label><input type='number' name='bil2' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[10]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-min'>
                            <label for='min'>masukkan array dengan pemisah(,)</label><input type='text' name='min' placeholder='ex:1,2,3,4'>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[11]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-max'>
                            <label for='max'>masukkan array dengan pemisah(,)</label><input type='text' name='max' placeholder='ex:1,2,3,4'>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[12]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-bindec'>
                            <label for='bindec'>bilangan biner</label><input type='text' name='bindec' placeholder='ex:11001'>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[13]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-decbin'>
                            <input type='number' name='decbin' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[14]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-hypot'>
                            <label for='bil1'>alas</label><input type='number' step=0.1 value=0 name='bil1'>
                            <label for='bil2'>tinggi</label><input type='number' name='bil2' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[15]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-log'>
                            <input type='number' name='log' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[16]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-log10'>
                            <input type='number' name='log10' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[17]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-sin'>
                            <label for='sin'>derajat</label><input type='number' name='sin' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[18]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-cos'>
                            <label for='cos'>derajat</label><input type='number' name='cos' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[19]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-tan'>
                            <label for='tan'>derajat</label><input type='number' name='tan' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[20]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-asin'>
                            <label for='asin'>derajat</label><input type='number' name='asin' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[21]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-acos'>
                            <label for='acos'>derajat</label><input type='number' name='acos' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                        case $math[22]:
                            echo "<form method='post'>
                            <input type='hidden' name='hidden-atan'>
                            <label for='atan'>derajat</label><input type='number' name='atan' value=0>
                            <div class='col-12 col-md-3'><button type='submit' class='btn btn-primary btn-lg'>submit</button></div>
                            </form>";
                            break;
                    }
                }
                if(isset($_POST['hidden-abs'])){
                    $abs = $_POST['abs'];
                    echo abs($abs);
                }
                if(isset($_POST['hidden-ceil'])){
                    $ceil = $_POST['ceil'];
                    echo ceil($ceil);
                }
                if(isset($_POST['hidden-round'])){
                    $round = $_POST['round'];
                    echo round($round);
                }
                if(isset($_POST['hidden-floor'])){
                    $floor = $_POST['floor'];
                    echo floor($floor);
                }
                if(isset($_POST['hidden-pow'])){
                    $bil = $_POST['pow'];
                    $pangkat = $_POST['pangkat'];
                    echo pow($bil,$pangkat);
                }
                if(isset($_POST['hidden-sqrt'])){
                    $sqrt = $_POST['sqrt'];
                    echo sqrt($sqrt);
                }
                if(isset($_POST['hidden-exp'])){
                    $exp = $_POST['exp'];
                    echo exp($exp);
                }
                if(isset($_POST['hidden-fmod'])){
                    $bil1 = $_POST['bil1'];
                    $bil2= $_POST['bil2'];
                    echo fmod($bil1,$bil2);
                }
                if(isset($_POST['hidden-intdiv'])){
                    $bil1 = $_POST['bil1'];
                    $bil2= $_POST['bil2'];
                    echo intdiv($bil1,$bil2);
                }
                if(isset($_POST['hidden-min'])){
                    $min = explode(",",$_POST['min']);
                    echo min($min);
                }
                if(isset($_POST['hidden-max'])){
                    $max = explode(",",$_POST['max']);
                    echo max($max);
                }
                if(isset($_POST['hidden-bindec'])){
                    $bindec = $_POST['bindec'];
                    echo bindec($bindec);
                }
                if(isset($_POST['hidden-decbin'])){
                    $decbin = $_POST['decbin'];
                    echo decbin($decbin);
                }
                if(isset($_POST['hidden-hypot'])){
                    $bil1 = $_POST['bil1'];
                    $bil2= $_POST['bil2'];
                    echo hypot($bil1,$bil2);
                }
                if(isset($_POST['hidden-log'])){
                    $log = $_POST['log'];
                    echo log($log);
                }
                if(isset($_POST['hidden-log10'])){
                    $log10 = $_POST['log10'];
                    echo log10($log10);
                }
                if(isset($_POST['hidden-sin'])){
                    $sin = deg2rad($_POST['sin']);
                    echo sin($sin);
                }
                if(isset($_POST['hidden-cos'])){
                    $cos = deg2rad($_POST['cos']);
                    echo cos($cos);
                }
                if(isset($_POST['hidden-tan'])){
                    $tan = deg2rad($_POST['tan']);
                    echo tan($tan);
                }
                if(isset($_POST['hidden-asin'])){
                    $asin = deg2rad($_POST['asin']);
                    echo asin($asin);
                }
                if(isset($_POST['hidden-acos'])){
                    $acos = deg2rad($_POST['acos']);
                    echo acos($acos);
                }
                if(isset($_POST['hidden-atan'])){
                    $atan = deg2rad($_POST['atan']);
                    echo atan($atan);
                }
                echo "</div>
                        </div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            </div>";
            ?>
            </div>
            <div class="col-sm-6">
            <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">Menampilkan pengalokasian tanggal php</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form method="post"">
                        <div class="row">
                            <input type="hidden" name="tanggal" value="ya">
                            <select name="inputan1">
                                <?php $pilihan = array("time_zone", "date", "strtotime", "mktime", "checkdate", "create_date", "date_add", "date_sub","date_date_set","date_diff", "date_modify", "date_sun_info", "date_sunset", "date_sunrice", "date_timestamp", "date_offset","gmdate");
                                foreach($pilihan as $pil){
                                    echo "<option value='$pil'>$pil</option>";
                                }
                                ?>
                            </select>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-lg" type="submit">submit</button></div>
                        </div>
                    </form>
                </div>
                <?php
                    echo "<div class='card shadow-lg border-0 my-5'>
                    <div class='card-body p-0'>
                        <div class='card-body p-0'>
                            <div class='p-5'>
                                <div class='text-center'>
                                    <div class='text-dark'>";
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['tanggal'])){
                        $var1 = $_POST['inputan1'];
                        switch($var1){
                            case $pilihan[0]:
                                echo "<form method='post'><select name='zone'>";
                                foreach(timezone_identifiers_list() as $a=>$x){
                                    echo "<option value='$x'>$x</option>";
                                }
                                echo "</select>
                                <input type='hidden' name='hidden-timezone' value='ya'>
                                <div class='col-12 col-md-3'><button class='btn btn-primary btn-lg' type='submit'>submit</button>
                                </form>";
                                break;
                            case $pilihan[1]:
                                echo "<form method='post'><select name='date'>";
                                $format = array("d-m-Y H:i:s"=>"tampil tanggal dan waktu lengkap", "d-m-Y"=>"tampil tanggal lengkap", "H:i:s"=>"tampil waktu", "l"=>"tampil hari", "d"=>"tampil tanggal", "m"=>"tampil bulan", "Y"=>"tampil tahun");
                                foreach($format as $a=>$x){
                                    echo "<option value='$a'>$x</option>";
                                }
                                echo "</select>
                                <input type='hidden' name='hidden-date' value='ya'>
                                <div class='col-12 col-md-3'><button class='btn btn-primary btn-lg' type='submit'>submit</button>
                                </form>";
                                break;
                            case $pilihan[2]:
                                echo "<form method='post'>
                                <input type='hidden' name='hidden-str' value='ya'>
                                <input type='text' name='str' placeholder='(English)ex:next month'>
                                <button type='submit' class='btn btn-primary btn-lg'>submit</button>
                                </form>";
                                break;
                            case $pilihan[3]:
                                echo "<form method='post'>
                                <input type='hidden' name='hidden-mktime' value='ya'>
                                <label for='mk'>cari tanggal</label>
                                <input type='date' name='mk'>
                                <button type='submit' class='btn btn-primary btn-lg'>submit</button>
                                </form>";
                                break;
                            case $pilihan[4]:
                                echo "<form method='post'>
                                <input type='hidden' name='hidden-check' value='ya'>
                                <input type='number' name='angka' value='1'>";
                                $bulan = array(1=>"Januari", 2=>"Februari", 3=>"Maret", 4=>"April", 5=>"Mei", 6=>"Juni", 7=>"Juli", 8=>"Agustus", 9=>"September", 10=>"Oktober", 11=>"November", 12=>"Desember");
                                echo "<select name='bulan'>";
                                foreach($bulan as $i=>$j){
                                    echo "<option value='$i'>$j</option>";
                                }
                                echo "</select>
                                <input type='number' value='1999' name='tahun'>
                                <button type='submit' class='btn btn-primary btn-lg'>submit</button></form>";
                                break;
                            case $pilihan[5]:
                                echo "<form method='post'>
                                <input name='hidden-create' type='hidden'>
                                <input name='create' type='text' placeholder='ex:2020-12-31'>
                                <button class='btn btn-primary btn-lg' type='sumbit'>submit</button>";
                                break;
                            case $pilihan[6]:
                                echo "<form method='post'>
                                <input name='hidden-add' type='hidden'>
                                <input name='create1' type='text' placeholder='ex:2020-12-31'>
                                <input name='add' type='text' placeholder='(English):40 days'>
                                <button class='btn btn-primary btn-lg' type='submit'>submit</button>";
                                break;
                            case $pilihan[7]:
                                echo "<form method='post'>
                                <input name='hidden-sub' type='hidden'>
                                <input name='create2' type='text' placeholder='ex:2020-12-31'>
                                <input name='sub' type='text' placeholder='(English):40 days'>
                                <button class='btn btn-primary btn-lg' type='submit'>submit</button>";
                                break;
                            case $pilihan[8]:
                                echo "<form method='post'>
                                <input name='hidden-date-set' type='hidden'>
                                <input name='date_set' type='date'>
                                <select name='format'>";
                                $hub = array("-",",","/",":");
                                foreach($hub as $y){
                                    echo "<option value='$y'>$y</option>";
                                }
                                echo "</select>
                                <button class='btn btn-primary btn-lg' type='submit'>submit</button></form>";
                                break;
                            case $pilihan[9]:
                                echo "<form method='post'>
                                <input name='hidden-diff' type='hidden'>
                                <label for='date1'>tanggal pertama</label>
                                <input name='date1' type='date'><br>
                                <label for='date2'>tanggal kedua</label>
                                <input name='date2' type='date'><br>
                                <button class='btn btn-primary btn-lg' type='submit'>submit</button></form>";
                                break;
                            case $pilihan[10]:
                                echo "<form method='post'>
                                <input name='hidden-modify' type='hidden'>
                                <input name='date-modify' type='date'>
                                <select name='format'>
                                <option value='+'>+</option>
                                <option value='-'>-</option></select>
                                <input name='days' type='number' value='1'><br>
                                <button class='btn btn-primary btn-lg' type='submit'>submit</button></form>";
                                break;
                            case $pilihan[11]:
                                date_default_timezone_set("Asia/Jakarta");
                                echo "Date :".date("l,d-M-Y",strtotime("now"))." in Mojoketo City<br>";
                                $sun_info = date_sun_info(strtotime("now"),-7.472638,112.434084);
                                foreach($sun_info as $key=>$val){
                                    echo "$key:".date("H:i:s",$val)."<br>";
                                }
                                break;
                            case $pilihan[12]:
                                date_default_timezone_set("Asia/Jakarta");
                                echo "Date :".date("l,d-M-Y",strtotime("now"))." in Mojoketo City<br>";
                                echo "sunset :".date_sunset(strtotime("now"),SUNFUNCS_RET_STRING,-7.472638,112.434084);
                                break;
                            case $pilihan[13]:
                                date_default_timezone_set("Asia/Jakarta");
                                echo "Date :".date("l,d-M-Y",strtotime("now"))." in Mojoketo City<br>";
                                echo "sunrise :".date_sunrise(strtotime("now"),SUNFUNCS_RET_STRING,-7.472638,112.434084);
                                break;
                            case $pilihan[14]:
                                echo "<form method='post'>
                                <input name='hidden-get' type='hidden'>
                                <label for='time-get'>daptkan timestamp</label>
                                <input name='time-get' type='date'>
                                <button class='btn btn-primary btn-lg' type='submit'>submit</button>
                                ";
                                break;
                            case $pilihan[15]:
                                echo "<form method='post'><select name='zone-offset'>";
                                foreach(timezone_identifiers_list() as $a=>$x){
                                    echo "<option value='$x'>$x</option>";
                                }
                                echo "</select>
                                <input type='hidden' name='hidden-offset' value='ya'>
                                <input type='date' name='date-offset'>
                                <div class='col-12 col-md-3'><button class='btn btn-primary btn-lg' type='submit'>submit</button>
                                </form>";
                                break;
                            case $pilihan[16]:
                                echo gmdate("l,d-M-Y");
                                break;
                            case $pilihan[17]:
                                break;
                        }
                    }
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['hidden-timezone'])){
                        $zone = $_POST['zone'];
                        date_default_timezone_set($zone);
                        echo date('d-m-Y H:i:s');
                    }
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['hidden-date'])){
                        $dat = $_POST['date'];
                        date_default_timezone_set('Asia/Jakarta');
                        echo date($dat);
                    }
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['hidden-str'])){
                        $strtotime = $_POST['str'];
                        echo date("d-M-Y",strtotime($strtotime));
                    }
                    if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['hidden-mktime'])){
                        $mktime = $_POST['mk'];
                        $char = explode("-",$mktime);
                        echo mktime(0,0,0,$char[2],$char[1],$char[0]);
                    }
                    if(isset($_POST['hidden-check'])){
                        $check1 = $_POST['angka'];
                        $check2 = $_POST['bulan'];
                        $check3 = $_POST['tahun'];
                        if(checkdate($check2,$check1,$check3) == true){
                            echo "tanggal ditemukan";
                        }else{
                            echo "tanggal tidak ditemukan";
                        }
                    }
                    if(isset($_POST['hidden-create'])){
                        $create = date_create($_POST['create']);
                        echo date_format($create,"l,d-M-Y");
                    }
                    if(isset($_POST['hidden-add'])){
                        $create = date_create($_POST['create1']);
                        date_add($create,date_interval_create_from_date_string($_POST['add']));
                        echo date_format($create,"l,d-M-Y");
                    }
                    if(isset($_POST['hidden-sub'])){
                        $create = date_create($_POST['create2']);
                        date_sub($create,date_interval_create_from_date_string($_POST['sub']));
                        echo date_format($create,"l,d-M-Y");
                    }
                    if(isset($_POST['hidden-date-set'])){
                        $set = date_create();
                        $dateset = explode("-",$_POST['date_set']);
                        $format = $_POST['format'];
                        date_date_set($set,$dateset[0],$dateset[1],$dateset[2]);
                        $dateset_format = "l,d".$format."M".$format."Y";
                        echo date_format($set,$dateset_format);
                    }
                    if(isset($_POST['hidden-diff'])){
                        $date1 = date_create($_POST['date1']);
                        $date2 = date_create($_POST['date2']);
                        $diff = date_diff($date1,$date2);
                        echo $diff->format("%R%a days");
                    }
                    if(isset($_POST['hidden-modify'])){
                        $format = $_POST['format'];
                        $date1 = date_create($_POST['date-modify']);
                        $days = $_POST['days'];
                        date_modify($date1,"$format $days days");
                        echo date_format($date1,"l,d-M-Y");
                    }
                    if(isset($_POST['hidden-get'])){
                        $date1 = date_timestamp_get($_POST['time-get']);
                        echo $date1;
                    }
                    echo "</div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            </div>
                                                </div>";
                ?>
            </div>
            </div>                      
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>