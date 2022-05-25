<html>

<head>
    <title>Primajasa | Mode Admin</title>
    <link rel="icon" href="../image/prima.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col s10">
                <div class="card-panel">
                    <h3><i class="ion-edit"></i> Edit Tipe Kelas </h3>
                    <?php include "koneksi.php";
                    $id = $_GET['id_class_type'];
                    $sql = mysqli_query($conn, 'select * from type_class where id_class_type="'.$id.'" ');
                    $dtt = mysqli_fetch_array($sql);
                    ?>
                    <form method="post" action=" type_class_uu.php?id_class_type=<?=$dtt['id_class_type'];?>">
                        <div class="input-field">
                            <input type="text" name="description" id="desc" value="<?=$dtt['description'];?>" required>
                            <label for="desc">Description</label>
                        </div>
                        <button class="btn waves-effect green"><i class="ion-edit"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i class="ion-close"></i></button></a>
    </div>
    <?php include "footer.php";?>
</body>

</html>
