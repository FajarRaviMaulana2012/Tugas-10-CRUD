<?php include("tersambung.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Customer Crud</title>
</head>

<body>

    <nav>
        <a href="add.php">[+] Tambah Baru</a>
        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran customer baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
        Hasilnya:
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Alamat </th>
                <th>No Telepon</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $sql = "SELECT * FROM customer";
        $query = mysqli_query($db, $sql);

        while($cust = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$cust['NAMA_CUST']."</td>";
            echo "<td>".$cust['ALAMAT_CUST']."</td>";
            echo "<td>".$cust['NO_TLP']."</td>";

            echo "<td>";
            echo "<a href='edit.php?ID=".$cust['ID']."'>Edit</a> | ";
            echo "<a href='delete.php?ID=".$cust['ID']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>