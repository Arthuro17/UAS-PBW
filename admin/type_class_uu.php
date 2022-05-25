<?php
    include "koneksi.php";

    $id = $_GET['id_class_type'];
    $desc = $_POST['description'];
    $sql = mysqli_query($conn, 'update type_class set description="'.$desc.'" where id_class_type="'.$id.'" ');
    
    if($sql) {
        echo "<script>window.alert('Data berhasil di Edit');window.location.href='type_class.php';</script>";
    } else {
        echo "<script>window.alert('Data Gagal');window.location.href='type_class.php';</script>";
    }
?>
