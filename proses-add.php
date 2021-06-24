<?php

include("tersambung.php");

if(isset($_POST['tambah'])){

    $nama = $_POST['NAMA_CUST'];
    $ID = $_POST['ID'];
    $alamat = $_POST['ALAMAT_CUST'];
    $telepon = $_POST['NO_TLP'];

    // buat query
    $sql = "INSERT INTO customer(ID,NAMA_CUST, ALAMAT_CUST, NO_TLP) VALUE ('$ID','$nama', '$alamat', '$telepon')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>