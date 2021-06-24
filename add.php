<!DOCTYPE html>
<html>

<head>
    <title>Tambah Customer</title>
</head>

<body>
    <header>
        <h3>Menambahkan customer baru</h3>
    </header>

    <form action="proses-add.php" method="POST">

        <fieldset>

            <p>
                <label for="NAMA_CUST">Nama Customer: </label>
                <input type="text" name="NAMA_CUST" placeholder="Nama lengkap" />
            </p>
            <p>
                <label for="ALAMAT_CUST">Alamat: </label>
                <textarea name="ALAMAT_CUST"></textarea>
            </p>
            <p>
                <label for="NO_TLP">No. Telepon: </label>
                <input type="text" name="NO_TLP" placeholder="Masukkan nomor" />
            </p>
            <p>
                <input type="submit" value="Tambahkan Customer" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>