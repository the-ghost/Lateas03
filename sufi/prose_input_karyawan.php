<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $jumlah_hari_kerja = $_POST['jumlah_hari_kerja'];
    $jumlah_absen = $_POST['jumlah_absen'];
    $jumlah_kehadiran = $_POST['jumlah_kehadiran'];
    $gaji = $_POST['gaji'];

// buat query
    $sql = "INSERT INTO absensi (nik,nama_karyawan, jumlah_hari_kerja, jumlah_absen, jumlah_kehadiran, gaji) VALUE ('$nik', '$nama_karyawan', 
    '$jumlah_hari_kerja', '$jumlah_absen', '$jumlah_kehadiran','$gaji')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: absensi.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: sufi.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>