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

    // buat query update
    $sql = "UPDATE absensi SET nik='$nik', nama_karyawan='$nama_karyawan', jumlah_hari_kerja='$jumlah_hari_kerja', jumlah_absen='$jumlah_absen', jumlah_kehadiran='$jumlah_kehadiran', gaji='$gaji' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: absensi.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
