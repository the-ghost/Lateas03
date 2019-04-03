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

<a href="input_cao.php"><button type="button" class="btn btn-primary"> input cao </button></a>

<br/><br/>

<table class="table-responsive">
  <table class="table">
  <thead>
    <tr>
        <th>No</th><th>Nama</th> <th>Tanggal</th> <th>File</th> <th>Aksi</th>
    </tr>
    <?php
                include('config.php');
                $query = 'SELECT * FROM cao ORDER BY id DESC';
                $sql = mysqli_query($koneksi,$query);
                if(mysqli_num_rows($sql) > 0){
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$data['nama_file']."</td>";
                        echo "<td>".$data['tanggal']."</td>";
                        echo "<td>".$data['file']."</td>";
                        echo "<td><a href=".$data['file'].">Download</a></td>";
                        "<tr>";
                        $no++;
        }
        }
        ?>

</thead>
</table>
</table>
</body>
</html>
