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
            .widthjk tbody tr td:empty{
                background-color: black;
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
                                        <tr><td colspan="2" rowspan="2">Uraian</td><td colspan="12">Usia</td><td rowspan="2">Jumlah</td><td rowspan="2">TOTAL</td></tr>
                                        <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td></tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $l7 = ['l11'=>0];
                                        $l8=0;
                                        $l9=0;
                                        foreach ($kelas as $value) {
                                            if ($value->kelas === '7') {
                                                $l7 = ['l11'=>$value->l11+$l7['l11']];
                                            }
                                            echo '<tr><td rowspan="2">'.$value->ckelas.'</td>
                                            <td>Laki-Laki</td>
                                            <td>'.(($value->l11==='0')?"":$value->l11).'</td>
                                            <td>'.(($value->l12==='0')?"":$value->l12).'</td>
                                            <td>'.(($value->l13==='0')?"":$value->l13).'</td>
                                            <td>'.(($value->l14==='0')?"":$value->l14).'</td>
                                            <td>'.(($value->l15==='0')?"":$value->l15).'</td>
                                            <td>'.(($value->l16==='0')?"":$value->l16).'</td>
                                            <td>'.(($value->l17==='0')?"":$value->l17).'</td>
                                            <td>'.(($value->l18==='0')?"":$value->l18).'</td>
                                            <td>'.(($value->l19==='0')?"":$value->l19).'</td>
                                            <td>'.(($value->l20==='0')?"":$value->l20).'</td>
                                            <td>'.(($value->l21==='0')?"":$value->l21).'</td>
                                            <td>'.(($value->l22==='0')?"":$value->l22).'</td>
                                            <td>'.(($value->l==='0')?"":$value->l).'</td>
                                            <td rowspan="2">'.(($value->jml==='0')?"":$value->jml).'</td>
                                        </tr>

                                        <tr>
                                            <td>Perempuan</td>
                                            <td>'.(($value->p11==='0')?"":$value->p11).'</td>
                                            <td>'.(($value->p12==='0')?"":$value->p12).'</td>
                                            <td>'.(($value->p13==='0')?"":$value->p13).'</td>
                                            <td>'.(($value->p14==='0')?"":$value->p14).'</td>
                                            <td>'.(($value->p15==='0')?"":$value->p15).'</td>
                                            <td>'.(($value->p16==='0')?"":$value->p16).'</td>
                                            <td>'.(($value->p17==='0')?"":$value->p17).'</td>
                                            <td>'.(($value->p18==='0')?"":$value->p18).'</td>
                                            <td>'.(($value->p19==='0')?"":$value->p19).'</td><td>'.(($value->p20==='0')?"":$value->p20).'</td><td>'.(($value->p21==='0')?"":$value->p21).'</td><td>'.(($value->p22==='0')?"":$value->p22).'</td><td>'.(($value->p==='0')?"":$value->p).'</td></tr>';
                                        }?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">
                                <table border="1" class="widthjk">
                                    <thead>
                                        <tr><td colspan="2" rowspan="2">Uraian</td><td colspan="12">Usia</td><td rowspan="2">Jumlah</td><td rowspan="2">TOTAL</td></tr>
                                        <tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td></tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($kelas_kel as $value) {
                                            echo '<tr><td rowspan="2">'.$value->ckelas.'</td>
                                            <td>Laki-Laki</td>
                                            <td>'.(($value->l11==='0')?"":$value->l11).'</td>
                                            <td>'.(($value->l12==='0')?"":$value->l12).'</td>
                                            <td>'.(($value->l13==='0')?"":$value->l13).'</td>
                                            <td>'.(($value->l14==='0')?"":$value->l14).'</td>
                                            <td>'.(($value->l15==='0')?"":$value->l15).'</td>
                                            <td>'.(($value->l16==='0')?"":$value->l16).'</td>
                                            <td>'.(($value->l17==='0')?"":$value->l17).'</td>
                                            <td>'.(($value->l18==='0')?"":$value->l18).'</td>
                                            <td>'.(($value->l19==='0')?"":$value->l19).'</td>
                                            <td>'.(($value->l20==='0')?"":$value->l20).'</td>
                                            <td>'.(($value->l21==='0')?"":$value->l21).'</td>
                                            <td>'.(($value->l22==='0')?"":$value->l22).'</td>
                                            <td>'.(($value->l==='0')?"":$value->l).'</td>
                                            <td rowspan="2">'.(($value->jml==='0')?"":$value->jml).'</td>
                                        </tr>

                                        <tr>
                                            <td>Perempuan</td>
                                            <td>'.(($value->p11==='0')?"":$value->p11).'</td>
                                            <td>'.(($value->p12==='0')?"":$value->p12).'</td>
                                            <td>'.(($value->p13==='0')?"":$value->p13).'</td>
                                            <td>'.(($value->p14==='0')?"":$value->p14).'</td>
                                            <td>'.(($value->p15==='0')?"":$value->p15).'</td>
                                            <td>'.(($value->p16==='0')?"":$value->p16).'</td>
                                            <td>'.(($value->p17==='0')?"":$value->p17).'</td>
                                            <td>'.(($value->p18==='0')?"":$value->p18).'</td>
                                            <td>'.(($value->p19==='0')?"":$value->p19).'</td><td>'.(($value->p20==='0')?"":$value->p20).'</td><td>'.(($value->p21==='0')?"":$value->p21).'</td><td>'.(($value->p22==='0')?"":$value->p22).'</td><td>'.(($value->p==='0')?"":$value->p).'</td></tr>';
                                        }?>
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
    </body>
</html>
