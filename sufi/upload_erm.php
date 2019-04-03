<!DOCTYPE html>
<html>
<head>
	<title>Report ERM</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}

	p{
		color: green;
	}
</style>
<h2>ERM</h2>



<a href="erm.php">Kembali</a>
<br/><br/>
<?php 
include 'config.php';
?>

<form method="post" enctype="multipart/form-data" action="proses_upload_erm.php">
	Pilih File: 
	<input name="filepegawai" type="file" required="required"> 
	<input name="upload" type="submit" value="Import">
</form>

<br/><br/>

<a href="https://www.malasngoding.com/import-excel-ke-mysql-dengan-php">www.malasngoding.com</a>

</body>
</html>