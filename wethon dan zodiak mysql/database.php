<?php

class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "pertemuan-12";
    var $koneksi="";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
    }
    function tampil_hari(){
        $data = mysqli_query($this->koneksi,"select * from hari");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tampil_bulan(){
        $data = mysqli_query($this->koneksi,"select * from bulan");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tampil_pasaran(){
        $data = mysqli_query($this->koneksi,"select * from pasaran");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tampil_zodiak(){
        $data = mysqli_query($this->koneksi,"select * from zodiak");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
}