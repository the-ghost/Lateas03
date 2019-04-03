<?php

include("config.php");
    // buat query hapus
    $sql = "DELETE FROM erm";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: erm.php');
    } else {
        die("gagal menghapus...");
    }

?>
