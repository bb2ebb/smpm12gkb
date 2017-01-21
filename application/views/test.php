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
            .widthjk thead{
                text-align: center;
                background-color: black;
                color: whitesmoke;
                font-weight: bold
            }
            .widthjk thead tr:nth-child(2) td{
                width: 35px;
            }
            .widthjk thead tr:nth-child(1) td:nth-child(3){
                width: 65px;
            }
            .widthjk thead tr:nth-child(1) td:nth-child(4){
                width: 65px;
            }
            .widthjk tbody tr td{
                text-align: center;
            }
            .widthjk tbody tr:nth-child(2) td:nth-of-type(1), .widthjk tbody tr:nth-child(1) td:nth-of-type(2){
                width: 85px;
                text-align: left;
            }
            .widthjk tbody tr:nth-child(1) td:nth-of-type(1){
                width: 45px;
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
                        </tr>
                        <tr>
                            <td valign="top">
                                <table border="1" class="widthjk">
                                    <thead>
                                        <tr>
                                            <td colspan="2" rowspan="2">Uraian</td>
                                            <td colspan="12">Usia</td>
                                            <td rowspan="2">Jumlah</td>
                                            <td rowspan="2">TOTAL</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">VII A</td>
                                            <td>Laki-Laki</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>jml</td>
                                            <td rowspan="2">total</td>
                                        </tr>

                                        <tr>
                                            <td>Perempuan</td>
                                            <td>11</td>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>jml</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="background-color: black; font-size: 25px" class="dtengah colorwhite"><p>
                    TEST
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
