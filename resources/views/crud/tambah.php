<?php
include "../koneksi.php";

  if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $result = mysqli_query($koneksi, "INSERT INTO crud(nama, tanggal_lahir, agama, alamat) VALUES('$nama', '$tanggal_lahir', '$agama', '$alamat')");
     
      header('location:../index.php');
  }
?>