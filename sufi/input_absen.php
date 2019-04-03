<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database

?>

<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
 body {
  padding-top: 50px;
  padding-right: 10%;
  padding-left: 10%;
        }
</style>
 <title>Enterprise Risk Management</title>
</head>
<body>
    
  <div class= "container">
    <img src="logo1.png" class="mx-auto d-block" style="width:100%"/>
    </div>
<br>
<br>
<div class="btn-group btn-group-lg">
  <a href="erm.php"><button type="button" class="btn btn-primary">ERM</button></a>
  <a href="ceo.php"><button type="button" class="btn btn-primary">CAO</button></a>
  <a href="absensi.php"><button type="button" class="btn btn-primary">Absensi Karyawan</button></a>
</div>
<br><br>

<body>
    <h1>Input Absen</h1>

    <form action="prose_input_karyawan.php" method="POST">
<div class="form-group">
        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<p>
            <label for="nik">Nik: </label>
            <input type="text" class="form-control" name="nik"></input>
        </p>
        <p>
            <label for="nama_karyawan">Nama: </label>
            <input type="text" class="form-control" name="nama_karyawan"></input>
        </p>
        <p>
            <label for="jumlah_hari_kerja">Hari Kerja: </label>
            <input type="text" class="form-control" name="jumlah_hari_kerja"></input>
        </p>
        <p>
            <label for="jumlah_absen">Absen: </label>
            <input type="text" class="form-control" name="jumlah_absen"></input>
        </p>
        <p>
            <label for="jumlah_kehadiran">Kehadiran: </label>
            <input type="text" class="form-control" name="jumlah_kehadiran"></input>
        </p>
        <p>
            <label for="gaji">Gaji: </label>
            <input type="text" class="form-control" name="gaji"></input>
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>
</div>

    </form>
</body>
</html>