
                <?php
                include('config.php');
                $query = 'SELECT * FROM cao ORDER BY id DESC';
                $sql = mysqli_query($koneksi,$query);
                if(mysqli_num_rows($sql) > 0){
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr bgcolor="#fff">
                            <td align="center">'.$no.'</td>
                            <td align="center">'.$data['nama_file'].'</td>
                            <td align="center">'.$data['tanggal'].'</td>
                            <td align="center">'.$data['file'].'</td>
                            <td><a href="'.$data['file'].'">'.$data['file'].'</a></td>
                        </tr>
                        ';
                        $no++;
                    }
                }else{
                    echo '
                    <tr bgcolor="#fff">
                        <td align="center" colspan="4" align="center">Tidak ada data!</td>
                    </tr>
                    ';
                }
                ?>