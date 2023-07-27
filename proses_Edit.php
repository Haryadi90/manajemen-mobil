<?php
include ("../koneksi.php");

//apakah tombol submit sudah diteken
if (isset($_POST['Submit'])) {
//$id = $_POST ['Bon_keluar'];
//$id = $_POST ['id'];
$merek_mobil = $_POST['merek_mobil'];
$model_mobil = $_POST['model_mobil'];
$nomor_plat = $_POST['nomor_plat'];
$tarip_sewa_perhari = $_POST['tarip_sewa_perhari'];

$query = "UPDATE manajemenmobil SET merek_mobil ='$merek_mobil', model_mobil ='$model_mobil', nomor_plat ='$nomor_plat', tarip_sewa_perhari ='$tarip_sewa_perhari' WHERE nomor_plat='$nomor_plat'";
$result = mysqli_query($koneksi, $query);
//var_dump($result);
// $ubah = "UPDATE pembelian_produk SET Tgl_po ='$Tgl_po', No_po ='$No_po', Suplier = '$Suplier', Kode_barang ='$Kode_barang', Nama_barang = '$Nama_barang', Satuan = '$Satuan', Qty_po = '$Qty_po', Harga_satuan ='$Harga_satuan', Harga_total = '$Harga_total' WHERE id = '$id'";
//    $result = mysqli_query($koneksi, $ubah); 




if($result){
    echo "
    <script>
        alert('Berhasil menyimpan data');
    </script>
";
header('Location: index.php?status=sukses');
// } else {
// header('Location: index.php.php?status=gagal');
// }
// } else {
// die("Akses dilarang...");
 }
}
 ?>

             