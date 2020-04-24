<?php
$koneksi= mysqli_connect("localhost","root","","corona");


$sql ="SELECT * FROM odp ORDER BY nama";

$res=mysqli_query($koneksi,$sql);

$odp=array();

while ($data = mysqli_fetch_assoc($res)) {
  $odp[] = $data;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>form index</title>
  </head>
  <body>
    <div class="container">
      <h2 class="alert alert-primary text-center mt-3"> Data Orang Dalam Pengawasan (ODP) </h2>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
   <div class="row mb-3">
   </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Usia</th>
      <th scope="col">Alamat</th>
      <th scope="col">Waktu Periksa</th>
      <th scope="col">Suhu tubuh</th>
      
      
      
    </tr>
      </thead>
 
  
 <tbody>
  <?php
  $no=1;
  foreach($odp as $a) { ?>

    <tr>
        <th scope="row"><?=$no?></th>
        <td><?=$a['nama'] ?></th>
        <td><?=$a['jenis_kelamin'] ?></td>
        <td><?=$a['usia'] ?></td>
        <td><?=$a['alamat'] ?></td>
        <td><?=$a['tanggal_waktu'] ?></td>
        <td><?=$a['suhu_tubuh'] ?></td>

    </td>
    
  </tr>

  <?php
  $no++;
  }
  ?>
 </tbody>

</table>
<a href="http://localhost/corona/about/index.html" class="btn btn-success" ><i></i>Kembali</a>

</div>
</div>

 