<html>
<head>

    <meta charset="utf-8">
    <title> form login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
session_start();
if (isset($_SESSION["id_petugas"])) {
    header("Location : http://localhost/corona/odp/index.php");
} 
?>
<center>
<form action="proses-login.php" method="post">
   <div class="box">
        <h2> Login <h2>
        <form>
            <div class="inputBox">
            <input type="text" name="username" id="">
            <label for="">Username</label>
        </div>
        <div>
            <div class="inputBox">
            <input type="password" name="password" id="">
            <label for="">Password</label>
        </div>
        
            <input type="submit" value="submit" name="btnlogin">
           </form>
    </div>
</body>
