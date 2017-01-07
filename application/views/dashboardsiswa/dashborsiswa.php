<html class="no-js" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Screen - Creative HTML Template</title>
        <link rel="stylesheet" href="./assets/0global/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/0global/css/jquery-ui.css">
        <link href="./assets/1hmscr/css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./assets/1hmscr/css/animate.css">	
        <link rel="stylesheet" href="./assets/1hmscr/css/style.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
    </head>

    <body>
        <div class="preloader" style="display: none;">
            <div class="status" style="display: none;">
                <div class="status-mes"></div>
            </div>
        </div>
        <header>
            <div class="text-center head-title">
                <img src="./assets/1hmscr/img/logo.png" alt="">
            </div>
        </header>
        <div class="top-content">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $no = 1;
                    foreach ($tabel as $value) {
                        echo '<tr><td>'.$no++.'</td><td>'.$value->namalengkap.'</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

        
        <footer>
            <div class="text-center">
                <p class="copyright">dibuat oleh <b>bb2ebb</b> © 2016. All Rights Reserved.</p>
            </div>
        </footer>
        <script src="./assets/1hmscr/js/jquery-1.js"></script>
        <script src="./assets/0global/js/jquery-ui.js"></script>
        <script src="./assets/0global/js/bootstrap.js"></script>
        <script src="./assets/1hmscr/js/wow.js"></script>

        <script type="text/javascript">
            /*preloader*/
            $(window).load(function () {
                $('.status').fadeOut();
                $('.preloader').delay(350).fadeOut('slow');
            });
            /*End preloader*/
        </script>
        <script type="text/javascript">
            /*wow animation*/
            new WOW().init();
            /*End wow animation*/
        </script>
        <script>$(function () {
                $("#form-tanggallahir, #form-tanggallahiribu, #form-tanggallahirwali, #form-tanggallahiribu, #form-awaltanggalmasuksekolah").datepicker();
            });</script>
        <script>
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if ((charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>

    </body>
</html>

