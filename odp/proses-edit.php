<?php  
$koneksi = mysqli_connect("localhost", "root", "", "corona");

if(isset($_POST['simpan'])){

$id_odp=$_POST['id_odp'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$usia=$_POST['usia'];
$alamat=$_POST['alamat'];
$tanggal_waktu=$_POST['tanggal_waktu'];
$suhu_tubuh=$_POST['suhu_tubuh'];


     $sql = "UPDATE odp SET nama='$nama', jenis_kelamin='$jenis_kelamin', usia='$usia', alamat='$alamat', tanggal_waktu='$tanggal_waktu',  suhu_tubuh='$suhu_tubuh' WHERE id_odp=$id_odp";

    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);


   // var_dump($count);
   //   var_dump(expression)

    if($count==1)
        {
             echo " <script> alert('Data Berhasil diperbarui'); document.location.href = 'index.php'; </script> ";
        }
        else{
    // var_dump($sql);die;
    header("Location: edit.php");
}
}
?>
    ?>