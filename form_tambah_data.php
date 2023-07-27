<!DOCTYPE html>
<html>
    <head>
        <title>data stok barang</title>
    </head>
    <body>
    <a href="index.php">Kembali</a>
    <form method="post" action="proses_simpan.php">
        <table>
        <tr>
            <td>Merek mobil</td>
            <td><input type="text" name="merek_mobil"></td>
        </tr>
        <tr>
            <td>Model mobil</td>
            <td><input type="text" name="model_mobil"></td>
        </tr>
        <tr>
            <td>Nomor plat</td>
            <td><input type="text" name="nomor_plat"></td>
        </tr>
        <tr>
            <td>tarip sewa/hari</td>
            <td><input type="text" name="tarip_sewa_perhari"></td>
        </tr>
       
        <tr>
            <td colspan="2"> <button type="submit" name="submit" value="simpan">simpan</button></td>
        </tr><br>

        <td><button <a href="index.php">cencel</a></td>
 </tr>
        </table>
    </form>
    
    
    </body>
</html>