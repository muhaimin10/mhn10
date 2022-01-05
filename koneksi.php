<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "putra";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$koneksi){
    echo "koneksi tidak ada";
}


?>