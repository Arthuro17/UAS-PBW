<?php
    include "koneksi.php";

    $id = $_GET['id_class_type'];

    $sql = mysqli_query($conn, 'delete from type_class where id_class_type="'.$id.'" ');

if($sql) {
    echo "<script>window.alert('Data berhasil dihapus');window.location.href='type_class.php';</script>";
} else {
    echo "<script>window.alert('Gagal tuk Hapus');window.location.href='type_class.php';</script>";
}
?>
