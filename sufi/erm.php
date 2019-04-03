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
 
	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
 
	<a href="upload_erm.php"><button type="button" class="btn btn-primary">Import Data</button></a>
	<a href="hapus_erm.php"><button type="button" class="btn btn-primary">Hapus Data</button></a>
	<table class="table-responsive">
	<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>ALamat</th>
			<th>Jabatan</th>
			<th>Telepon</th>
			<th>Usia</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
			<th>Lain-lain</th>
		</tr>
		<?php 
		include 'config.php';
		$no=1;
		$data = mysqli_query($koneksi,"select * from erm");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th><?php echo $d['jabatan']; ?></th>
				<th><?php echo $d['telepon']; ?></th>
				<th><?php echo $d['usia']; ?></th>				
				<th><?php echo $d['jenis_kelamin']; ?></th>
				<th><?php echo $d['status']; ?></th>
				<th><?php echo $d['lain_lain']; ?></th>
			</tr>
			<?php 
		}
		?>
 </thead>
 </table>	
 </table> 
</body>
</html>