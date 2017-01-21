<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Generator" content="EditPlus®">
        <meta name="Author" content="">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <style>
            table{
                font-family: cambria,calibri;
            }
            .widthselkel tr td:nth-last-child(1){
                width: 50px;
                text-align: center;
                background-color: red;
                font-weight: bold;
            }
            .widthselkel tr td:nth-last-child(2){
                width: 142px;
                text-align: left;
                background-color: yellow;
            }
            .widthjk tr td:nth-last-child(1){
                width: 40px;
                text-align: center;
            }
            .widthjk tr td:nth-last-child(2){
                width: 100px;
            }
            .widthjk tr td:nth-last-child(3){
                width: 45px;
                text-align: center;
            }
            .dtengah{
                vertical-align: text-bottom;
                text-align: center;
                font-weight: bold;
            }
            .colorwhite{
                text-align: center;
                color: whitesmoke;
                font-weight: bold
            }
        </style>
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>
                    <p class="dtengah" style="font-size: 30px">DATA SISWA<br/>TAHUN PELAJARAN 2016 – 2017</p>
                    <table border="1">
                        <tr>
                            <td><p class="dtengah">DATA JUMLAH SISWA<br/>KELAS VII<br/>TAHUN 2016 – 2017</p></td>
                            <td><p class="dtengah">DATA JUMLAH SISWA<br/>KELAS VIII<br/>TAHUN 2016 – 2017</p></td>
                            <td><p class="dtengah">DATA JUMLAH SISWA<br/>KELAS IX<br/>TAHUN 2016 – 2017</p></td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <table border="1" class="widthjk">
                                    <tr>
                                        <td style="background-color: black" class="colorwhite" colspan="3">Kelas 7</td>
                                    </tr>
                                    <?php
                                    foreach ($kelas7 as $value) {
                                        echo '<tr><td rowspan="2">' . $value->ckelas . '</td><td>Laki-Laki</td><td>' . $value->l . '</td></tr><tr><td>Perempuan</td><td>' . $value->p . '</td></tr><tr><td colspan="2">Jumlah</td><td>' . $value->jml . '</td></tr>';
                                    }
                                    ?>
                                </table>
                            </td>
                            <td valign="top">
                                <table border="1" class="widthjk">
                                    <tr>
                                        <td style="background-color: black" class="colorwhite" colspan="3">Kelas 8</td>
                                    </tr>
                                    <?php
                                    foreach ($kelas8 as $value) {
                                        echo '<tr><td rowspan="2">' . $value->ckelas . '</td><td>Laki-Laki</td><td>' . $value->l . '</td></tr><tr><td>Perempuan</td><td>' . $value->p . '</td></tr><tr><td colspan="2">Jumlah</td><td>' . $value->jml . '</td></tr>';
                                    }
                                    ?>
                                </table>
                            </td>
                            <td valign="top">
                                <table border="1" class="widthjk">
                                    <tr>
                                        <td style="background-color: black" class="colorwhite" colspan="3">Kelas 9</td>
                                    </tr>
                                    <?php
                                    foreach ($kelas9 as $value) {
                                        echo '<tr><td rowspan="2">' . $value->ckelas . '</td><td>Laki-Laki</td><td>' . $value->l . '</td></tr><tr><td>Perempuan</td><td>' . $value->p . '</td></tr><tr><td colspan="2">Jumlah</td><td>' . $value->jml . '</td></tr>';
                                    }
                                    ?>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <?php
                            foreach ($kelas789 as $value) {
                                echo '<td>
                                <table border="1" class="widthselkel">
                                    <tr>
                                        <td colspan="2" style="background-color: black" class="dtengah colorwhite">JUMLAH KESELURUHAN<br/>KELAS ' . $value->kelas . '</td>
                                    </tr>
                                    <tr>
                                        <td>Laki-Laki</td>
                                        <td>' . $value->l . '</td>
                                    </tr>
                                    <tr>
                                        <td>Perempuan</td>
                                        <td>' . $value->p . '</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>' . $value->jml . '</td>
                                    </tr>
                                </table>
                            </td>';
                            }
                            ?>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="background-color: black; font-size: 25px" class="dtengah colorwhite"><p>
                    <?php
                    $x = "";
                    $y = "";
                    foreach ($kelas789 as $value) {
                        $x .= $value->jml . '+';
                        $y += $value->jml;
                    }
                    echo "JUMLAH KESELURUHAN: ". trim($x, "+").'='.$y;
                    ?>
                </p></td>
            </tr>
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
