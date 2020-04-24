<?php
$koneksi = mysqli_connect("localhost", "root", "", "corona");
if(isset($_POST["simpan"]))
{
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$usia=$_POST['usia'];
$alamat=$_POST['alamat'];
$tanggal_waktu=$_POST['tanggal_waktu'];
$suhu_tubuh=$_POST['suhu_tubuh'];

$sql="INSERT INTO odp(nama,jenis_kelamin,usia,alamat,tanggal_waktu,suhu_tubuh) VALUES('$nama','$jenis_kelamin','$usia','$alamat','$tanggal_waktu','$suhu_tubuh')";

	$res=mysqli_query($koneksi,$sql);

	$count=mysqli_affected_rows($koneksi);

	if($count==1)
		{
			 echo " <script> alert('Data Berhasil ditambah'); document.location.href = 'index.php'; </script> ";
		}
else{
	var_dump($sql);die;
	header("Location: tambah.php");
}
}
?>