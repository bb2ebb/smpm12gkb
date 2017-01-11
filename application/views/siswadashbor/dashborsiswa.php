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
                    <th>Kelas</th>
                    <th>No Urut</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>JK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($tabel as $value) {
                    echo '<tr><td>' . $no++ . '</td>
                            <td>' . $value->ckelas . '</td>
                            <td>' . $value->nourut_sesuaijurnal . '</td>
                            <td>' . $value->nis . '</td>
                            <td>' . $value->nisn . '</td>
                            <td>' . $value->namalengkap . '<hr/>'
                            . '<button onclick="post(\'delete\', {deletesiswa:\'\', id:\''.$value->id.'\',url:\'dashboard\'})">hapus</button>'
                            . '<button onclick="post(\'edit\', {editsiswa:\'\', id:\''.$value->id.'\',url:\'dashboard\'})">edit</button>'
                            . '<button onclick="post(\'/dashboard/view\', {id:\''.$value->id.'\'})">view</button>
                                </td>
                            <td>' . $value->namapanggilan . '</td>
                            <td>' . $value->jeniskelamin . '</td>
                            <td>' . $value->tempatlahir . '</td>
                            <td>' . $value->tanggallahir . '</td>
                            </tr>';
                }
                ?>

            </tbody>
        </table>
        <script>
            function post(path, params, method) {
                method = method || "post";
                var form = document.createElement("form");
                form.setAttribute("method", method);
                form.setAttribute("action", path);

                for (var key in params) {
                    if (params.hasOwnProperty(key)) {
                        var hiddenField = document.createElement("input");
                        hiddenField.setAttribute("type", "hidden");
                        hiddenField.setAttribute("name", key);
                        hiddenField.setAttribute("value", params[key]);

                        form.appendChild(hiddenField);
                    }
                }

                document.body.appendChild(form);
                form.submit();
            }
        </script>
    </body>
</html>
