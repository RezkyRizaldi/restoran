<?php 
include '../koneksi.php';
 
  $id = $_GET['id']; 
  $nama = $_POST['nama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $result = mysqli_query($koneksi,"UPDATE crud SET nama='$nama', tanggal_lahir='$tanggal_lahir', agama='$agama', alamat='$alamat' WHERE id='$id'");
  
  header("Location:../index.php");
?>
