<?php
include("config.php");
include "excel_reader2.php";



if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama_file = $_POST['nama_file'];
    $tanggal = date("Y-m-d");
    $file=$_FILES['file']['name'];
    if(strlen($file)>0){
    if(is_uploaded_file($_FILES['file']['tmp_name'])){
    move_uploaded_file($_FILES['file']
    ['tmp_name'],"upload/".$file);
    } }
// buat query
    $sql = "INSERT INTO cao (nama_file,tanggal, file) VALUES ('$nama_file', '$tanggal', '$file')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ceo.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: sufi.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>