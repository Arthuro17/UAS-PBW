<?php
    include "koneksi.php";

    $id = $_GET['id_rute'];
    $depart = $_POST['depart'];
    $rutf = $_POST['rute_from'];
    $rutt = $_POST['rute_to'];
    $price = $_POST['price'];
    $idbis = $_POST['id_bis'];
    $sql = mysqli_query($conn, 'update rute set depart="'.$depart.'", rute_from="'.$rutf.'", rute_to="'.$rutt.'", price="'.$price.'", id_bis="'.$idbis.'" where id_rute="'.$id.'" ');
    
    if($sql) {
        echo "<script>window.alert('Data berhasil di Edit');window.location.href='rute.php';</script>";
    } else {
        echo "<script>window.alert('Data Gagal');window.close();</script>";
    }
?>
