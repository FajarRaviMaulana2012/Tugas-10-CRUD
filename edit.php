<?php

include("tersambung.php");

// kalau tidak ada id di query string
if( !isset($_GET['ID']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['ID'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM customer WHERE ID=$id";
$query = mysqli_query($db, $sql);
$cs = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Customer</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="ID" value="<?php echo $cs['ID'] ?>" />

            <p>
                <label for="nama">Nama Customer: </label>
                <input type="text" name="NAMA_CUST" placeholder="Nama Customer"
                    value="<?php echo $cs['NAMA_CUST'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="ALAMAT_CUST"><?php echo $cs['ALAMAT_CUST'] ?></textarea>
            </p>
            <p>
                <label for="telepon">No Telepon: </label>
                <textarea name="NO_TLP"><?php echo $cs['NO_TLP'] ?></textarea>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>