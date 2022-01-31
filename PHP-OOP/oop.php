<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="input">
        <button>submit</button>
    </form>
    <?php
        class buah{
            const tes = "<br>Halo gaes";
            public $var;
            public function __construct($var){
                $this->var = $var;
            }
            protected function getBuah(){
                echo "<br>ini lo gaes: ".$this->var;
            }
            protected function setBuah($ar){
                echo "<br>ini $ar";
            }
            public function __destruct(){
                echo "<br>The Fruit is {$this->var}";
            }
        }
        class mangga extends buah{
            public function message(){
                echo "am I a fruit or a berry ?";
                $this->setBuah("mangga");
            }
        }
        if($_POST){
            $var = $_POST['input'];
            $mangga = new mangga($var);
            $mangga->message();
            echo buah::tes;
        }
        
    ?>
</body>
</html>