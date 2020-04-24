<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>form detail</title>
  </head>
  <body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php  

$koneksi = mysqli_connect("localhost", "root", "", "corona");

$id_odp = $_GET['id_odp'];

$sql = "SELECT * FROM odp ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail ODP</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Orang Dalam Pengawasan</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detail['nama'];?></td>
				</tr>
				<tr>
					<td><strong>Jenis Kelamin</strong></td>
					<td><?=$detail['jenis_kelamin']?></td>
				</tr>
				<tr>
					<td><strong>Usia</strong></td>
					<td><?=$detail['usia']?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$detail['alamat']?></td>
				</tr>
				<tr>
					<td><strong>Waktu Pemeriksaan</strong></td>
					<td><?=$detail['tanggal_waktu']?></td>
				</tr>
				<tr>
					<td><strong>Suhu Tubuh</strong></td>
					<td><?=$detail['suhu_tubuh']?></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
