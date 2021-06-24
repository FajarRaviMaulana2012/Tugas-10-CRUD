<?php

include("tersambung.php");

if(isset($_POST['simpan'])){

    $ID = $_POST['ID'];
    $nama = $_POST['NAMA_CUST'];
    $alamat = $_POST['ALAMAT_CUST'];
    $telepon = $_POST['NO_TLP'];

    $sql = "UPDATE customer SET NAMA_CUST='$nama', ALAMAT_CUST='$alamat', NO_TLP='$telepon' WHERE ID=$ID";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>