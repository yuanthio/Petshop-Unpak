<?php 

include('koneksi.php');

$id_menu = $_GET['id_menu'];

$hapus= mysqli_query($koneksi, "DELETE FROM produk WHERE id_menu='$id_menu'");

echo "<script>alert('Produk Berhasil Dihapus!');</script>";
echo "<script>location= 'daftar_menu.php'</script>";

 ?>