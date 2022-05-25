<?php
    include "koneksi.php";

    $depart = $_POST['depart'];
    $rutf = $_POST['rute_from'];
    $rutt = $_POST['rute_to'];
    $price = $_POST['price'];
    $idbis= $_POST['id_bis'];

    $sql = mysqli_query($conn, 'INSERT INTO rute (depart, rute_from, rute_to, price, id_bis) VALUES ("'.$depart.'", "'.$rutf.'", "'.$rutt.'", "'.$price.'", "'.$idbis.'") ');
    if($sql) {
        echo "<script>window.alert('Data berhasil di tambahkan');window.location.href='rute.php';</script>";
    } else {
        echo "<script>window.alert('Data gagal di Upload');window.close();</script>";
    }
?>
