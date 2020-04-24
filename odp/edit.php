<?php  
$koneksi = mysqli_connect("localhost", "root", "", "corona");

$id_odp = $_GET['id_odp'];
$sql = mysqli_query($koneksi, "SELECT * FROM odp WHERE id_odp=$id_odp");
$query = "SELECT * FROM odp WHERE id_odp=$id_odp";
$res = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <title>Edit Data ODP</title>
</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h2><i class="fas fa-user-plus"></i>Edit Data ODP</h2>
          </div>
          <div class="card-body">
            <form method="post" action="proses-edit.php">
              <table class="table">
                <?php  
                while ($odp = mysqli_fetch_assoc($sql)):
                ?>
              <tr>
                <input type="hidden" name="id_odp" value="<?php echo $odp['id_odp'];?>">
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $odp['nama'];?>"></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $odp['jenis_kelamin'];?>"></td>
              </tr>

              <tr>
                <td>Usia</td>
                <td><input type="text" name="usia" value="<?php echo $odp['usia'];?>"></td>
              </tr>
              <tr>
                <td>Waktu</td>
                <td><input type="text" name="tanggal_waktu" value="<?php echo $odp['tanggal_waktu'];?>" required></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $odp['alamat'];?>"></td>
              </tr>
               <tr>
                <td>Suhu Tubuh</td>
                <td><input type="text" name="suhu_tubuh" value="<?php echo $odp['suhu_tubuh'];?>" required></td>
              </tr>
              <?php  
              endwhile;
              ?>
             
              <tr>
                <td class="text-rigth" colspan="2">
                  <a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
                </td>
                <td></td>
                <td><input type="submit" class="btn btn-primary" name="simpan" value="simpan"></td>
              </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
