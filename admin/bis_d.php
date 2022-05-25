<?php
    include "koneksi.php";

    $id = $_GET['id_bis'];

    $sql = mysqli_query($conn, 'delete from trans where id_bis="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='bis.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.close();</script>";
}
?>
