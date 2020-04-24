<?php

$koneksi = mysqli_connect("localhost", "root", "", "corona");

$id_odp = $_GET["id_odp"];

$query = mysqli_query($koneksi,
 "DELETE FROM odp where id_odp=$id_odp");

//var_dump($query);
if($query>0){
    echo " <script> alert('Data Berhasil dihapus'); document.location.href = 'index.php'; </script> ";
}
?>