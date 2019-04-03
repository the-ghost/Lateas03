<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: absensi.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM absensi WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Update absen</title>
</head>

<body>
    <header>
        <h3>update absen</h3>
    </header>

    <form action="proses_update_absen.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<p>
            <label for="nik">Nik: </label>
            <input type="text" name="nik" value="<?php echo $siswa['nik'] ?>" />
        </p>
        <p>
            <label for="nama_karyawan">Nama: </label>
            <input type="text" name="nama_karyawan" value="<?php echo $siswa['nama_karyawan'] ?>" />
        </p>
        <p>
            <label for="jumlah_hari_kerja">Hari Kerja: </label>
            <input type="text" name="jumlah_hari_kerja" value="<?php echo $siswa['jumlah_hari_kerja'] ?>"></input>
        </p>
        <p>
            <label for="jumlah_absen">Absen: </label>
            <input type="text" name="jumlah_absen" value="<?php echo $siswa['jumlah_absen'] ?>" />
        </p>
        <p>
            <label for="jumlah_kehadiran">Kehadiran: </label>
            <input type="text" name="jumlah_kehadiran" value="<?php echo $siswa['jumlah_kehadiran'] ?>"></input>
        </p>
        <p>
            <label for="gaji">Gaji: </label>
            <input type="text" name="gaji" value="<?php echo $siswa['gaji'] ?>"></input>
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
