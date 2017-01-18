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
                font-weight: bold
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
                <td><p class="dtengah">DATA JUMLAH SISWA<br/>KELAS VII<br/>TAHUN 2016 – 2017</p>
                    <table border="1" class="widthjk">
                        <tr>
                            <td style="background-color: black" class="colorwhite" colspan="3">Kelas 7</td>
                        </tr>
                        <tr>
                            <td rowspan="2">VII A</td>
                            <td>Laki-Laki</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Perempuan</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td colspan="2">Jumlah</td>
                            <td>70</td>
                        </tr>
                    </table>
                </td>
                <td><p class="dtengah">DATA JUMLAH SISWA<br/>KELAS VIII<br/>TAHUN 2016 – 2017</p>
                
                </td>
                <td><p class="dtengah">DATA JUMLAH SISWA<br/>KELAS IX<br/>TAHUN 2016 – 2017</p>
                
                </td>
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
