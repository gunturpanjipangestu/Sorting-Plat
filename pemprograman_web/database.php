<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "nomorkendaraan";

$db = mysqli_connect($host, $user, $password, $dbname);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>