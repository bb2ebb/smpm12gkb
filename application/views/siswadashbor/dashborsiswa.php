<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Generator" content="EditPlus®">
        <meta name="Author" content="">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Urut</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($tabel as $value) {
                    echo '<tr><td>'.$no++.'</td>
                            <td>'.$value->nourut_sesuaijurnal.'</td>
                            <td>'.$value->namalengkap.'</td>
                            <td>'.$value->jeniskelamin.'</td>
                            <td>'.$value->ckelas.'</td>
                            </tr>';
                }
                ?>
                
            </tbody>
        </table>
    </body>
</html>
