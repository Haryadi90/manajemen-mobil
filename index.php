<html>
<head>
  <title>Aplikasi penyewaan mobil</title>
</head>
<body>
  <h1>Data Barang</h1>
  <a href="../dashboard.php">Kembali</a><br><br>
  <a href="form_tambah_data.php">Tambah data</a>
 
  <table border="1" width="100%">
  <tr>
    <th>No</th>
    <th>Merek mobil</th>
    <th>Model mobil</th>
    <th>Nomo plat</th>
    <th>Tarip sewa perhari</th>
    <th colspan="1">Action</th>
                 
    <tr>
  <?php
  // Include / load file koneksi.php
  include "../koneksi.php";
//   ?>
 <?php
$registrasi = "SELECT * FROM manajemenmobil";
$q = mysqli_query($koneksi , $registrasi);
$no=1;
while($data = mysqli_fetch_array($q)){
    echo "<tr>";
        echo "<td>".$data ['id']."</div>";
        echo "<td>".$data ['merek_mobil']."</td>";
        echo "<td>".$data['model_mobil']."</td>";
        echo "<td>".$data['nomor_plat']."</td>";
        echo "<td>".$data['tarip_sewa_perhari']."</td>";
        echo "<td><a href='edit.php?nomor_plat=".$data['nomor_plat']."'>Ubah</a></td>";
        echo "<td><a href='hapus.php?id=".$data['id']."'>Hapus</a></td>";      
        echo "</tr>";
  
        echo "</tr>";
   // var_dump($Bon_masuk);
    // menambah nilai nomor urut
   
 }
 $no++
  ?>
  </table>
</body>
</html>
