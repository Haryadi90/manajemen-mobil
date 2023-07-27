 <?php 
include '../koneksi.php';
$nomor_plat= ($_GET["nomor_plat"]);

if(isset($_GET['nomor_plat'])){


//     $tampil = mysqli_query($koneksi, "select * from pembelian_produk where No_po='$No_po'");
//     $hasil = mysqli_fetch_array($tampil);
// echo '<pre>';

//(ini query salah tidak bisa mmenampilkan data pada form edit)
//     $quey = mysqli_query($koneksi, "SELECT * FROM  produk_keluar where Bon_keluar='$Bon_keluar'");
//     $ha= mysqli_fetch_row($quey);
//  //  var_dump($hasil);
//     echo '<pre>'; 
// }

$query = mysqli_query($koneksi, "SELECT* FROM manajemenmobil WHERE nomor_plat ='$nomor_plat'");
$ha = mysqli_fetch_array($query);
echo '<pre>';
// var_dump($hasil);
}  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit data</title>
    </head>
    <body>
        <form action="proses_Edit.php" method="POST">
            <table>
                <input type="hidden" name="id" value="<?php $ha ["id"]; ?>">
            <tr>
                <td>Merek mobil</td>
                <td><input type="text" name="merek_mobil" value="<?php echo $ha ["merek_mobil"]; ?>"></td>
            </tr>
            <tr>
                <td>Model mobil</td>
                <td><input type="text" name="model_mobil" value="<?php echo $ha ["model_mobil"]; ?>"></td>
            </tr>
            <tr>
                <td>Nomor plat</td>
                <td><input type="text" name="nomor_plat" value="<?php echo $ha ["nomor_plat"]; ?>"></td>
            </tr>
            <tr>
                <td>Tari sewa/perhari</td>
                <td><input type="text" name="tarip_sewa_perhari"  value="<?php echo $ha ["tarip_sewa_perhari"]; ?>"></td>
            </tr>
            <tr>
                <td><button type="submit" name="Submit">Update</button></td>
            </tr>
            </table>
        </form>
    </body>
</html>