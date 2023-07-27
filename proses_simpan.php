<?php 
include '../koneksi.php';

if (isset($_POST ['submit'])){
$merek_mobil = $_POST ['merek_mobil'];
$model_mobil = $_POST ['model_mobil'];
$nomor_plat = $_POST ['nomor_plat'];
$tarip_sewa_perhari = $_POST ['tarip_sewa_perhari'];


$result = "INSERT INTO manajemenmobil (merek_mobil, model_mobil, nomor_plat, tari_sewa_perhari) 
VALUE ('$merek_mobil', '$model_mobil', '$nomor_plat', '$tarip_sewa_perhari')";
// var_dump($result);
// exit;
$a= mysqli_query($koneksi, $result);
if($result){
    echo '<script>berhasil simpan data</script>';
    header('Location: index.php?status=sukses');
} else {
    echo '<script>Gagal</script>';
    header('Location: index.php?status=gagal');
}


}
?>