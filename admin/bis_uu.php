<?php
    include "koneksi.php";

    $id = $_GET['id_bis'];
    $code = $_POST['codec'];
    $desc = $_POST['description'];
    $seat = $_POST['seatc'];
    $id_ty = $_POST['id_class_type'];
    $sql = mysqli_query($conn, 'update trans set code="'.$code.'", description="'.$desc.'", seat="'.$seat.'", id_class_type="'.$id_ty.'" where id_bis="'.$id.'" ');
    
    if($sql) {
        echo "<script>window.alert('Data berhasil di Edit');window.location.href='trans.php';</script>";
    } else {
        echo "<script>window.alert('Data Gagal');window.close();</script>";
    }
?>
