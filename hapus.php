<?php


include ("../koneksi.php");
if(isset($_GET['id']) ) {
    $id = $_GET ['id'];

    $result ="DELETE FROM manajemenmobil WHERE id =$id";
    mysqli_query($koneksi, $result);

    if($result) {
        header ('Location: index.php'); 
    
    } else {
        die ("gagal menghapus");
    }
    } else {
        die ("akses dilarng");
}
?>