<?php

$host="localhost";
$user="root";
$password="";
$db="gaji";

$mysqli = mysqli_connect($host,$user,$password,$db);
if (!$mysqli){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>