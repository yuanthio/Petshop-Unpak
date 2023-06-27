<?php 

include('koneksi.php');

$id = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$id'");

echo "<script>alert('Pesanan Berhasil Dihapus!');</script>";
echo "<script>location= 'pesanan.php'</script>";

 ?>