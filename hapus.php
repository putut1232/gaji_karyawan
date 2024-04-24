<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['p'];
 
 
// menghapus data dari database
mysqli_query($mysqli,"delete from gaji where idGaji='$id'");
 
// mengalihkan halaman kembali ke index.php

echo "<script>alert('Proses Hapus berhasil');window.location.href='index.php?p=datagaji'</script>"
 
?>