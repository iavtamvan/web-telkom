<?php

$server = "localhost";
$user = "root";
$password = "";
//$password = "Ar14V@123";
$nama_database = "telkom_apps";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>