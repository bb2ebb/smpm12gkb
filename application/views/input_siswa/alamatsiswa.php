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

        <form role="form" action="input" method="post" class="login-form">
            <div class="top-content">
                <div class="inner-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <?php echo (isset($error) ? $error : "") ?>
                                        <p>Masukkan alamat siswa atas nama <b><?php echo (isset($namasiswa) ? $namasiswa : "") ?></b>:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                        <input name="idsiswa" type="hidden" value="<?php echo (isset($idsiswa) ? $idsiswa : "") ?>"/>
                                        <input name="namasiswa" type="text" value="<?php echo (isset($namasiswa) ? $namasiswa : "") ?>"/>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <div class="form-group">
                                        <!--<label for="namalengkap">Nama Lengkap</label>-->
                                        <textarea name="alamat" placeholder="Alamat..." class="form-top form-control" rows="6" id="form-alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <!--<label for="namalengkap">Nama Lengkap</label>-->
                                        <div class="col-sm-4 form-box" style="margin-left: 0 !important">
                                            <input name="desa" placeholder="Kelurahan/Desa..." class="form-top form-control" id="form-desa" type="text">
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="dusun" placeholder="Dusun (Jika ada)..." class="form-top form-control" id="form-dusun" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <input name="rt" placeholder="RT..." class="form-top form-control" id="form-rt" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <input name="rw" placeholder="RW..." class="form-top form-control" id="form-rw" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: 12% !important">
                                        <label for="provinsi">Provinsi</label>
                                        <select name="provinsi" class="form-top form-control" id="form-provinsi">
                                            <option value="0">-- Pilih Provinsi --</option>
                                            <?php
                                            foreach ($provinsi as $value) {
                                                echo '<option value="' . $value->id . '">' . $value->nama . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten</label>
                                        <select name="kabupaten" class="form-top form-control" id="form-kabupaten">
                                            <option value="0">-- Pilih Kabupaten --</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select name="kecamatan" class="form-top form-control" id="form-kecamatan">
                                            <option value="0">-- Pilih Kecamatan --</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input name="kodepos" placeholder="Kode Pos..." class="form-top form-control" id="form-kodepos" type="text">
                                    </div>
                                    <div class="form-group">
                                        <button name="submitalamatsiswa" type="submit" class="btn"><?php echo isset($_POST['submitalamatsiswa'])?"Tambahkan Lagi!":"Tambahkan!" ?></button>
                                        <button name="selanjutnyaalamatsiswa" type="submit" class="btn">Skip!</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <footer>
            <div class="text-center">
                <p class="copyright">dibuat oleh <b>bb2ebb</b> © 2016. All Rights Reserved.</p>
            </div>
        </footer>
        <script src="./assets/0global/js/jquery-3.1.1.min.js"></script>
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
        </script>
        <script type="text/javascript">
            new WOW().init();
        </script>
        <script type="text/javascript">
            $(function () {
                $("#form-provinsi").on("change", function () {
                    $.ajaxSetup({
                        type: "POST",
                        url: "<?php echo base_url('input/ajaxkabupaten') ?>",
                        cache: false
                    });
                    var value = $(this).val();
                    if (value > 0) {
                        $.ajax({
                            data: {id: value},
                            success: function (respond) {
                                var kab = '<option value="0">-- Pilih Kabupaten --</option>';
                                var kec = '<option value="0">-- Pilih Kecamatan --</option>';
                                $("#form-kabupaten").html(kab);
                                $("#form-kecamatan").html(kec);
                                $("#form-kabupaten").html(respond);
                            }
                        })
                    } else{
                        var kab = '<option value="0">-- Pilih Kabupaten --</option>';
                        var kec = '<option value="0">-- Pilih Kecamatan --</option>';
                        $("#form-kabupaten").html(kab);
                        $("#form-kecamatan").html(kec);
                    }
                });
                
                
                $("#form-kabupaten").on("change", function () {
                    $.ajaxSetup({
                        type: "POST",
                        url: "<?php echo base_url('input/ajaxkecamatan') ?>",
                        cache: false
                    });
                    var value = $(this).val();
                    if (value > 0) {
                        $.ajax({
                            data: {id: value},
                            success: function (respond) {
                                $("#form-kecamatan").html(respond);
                            }
                        })
                    } else{
                        var kec = '<option value="0">-- Pilih Kecamatan --</option>';
                        $("#form-kecamatan").html(kec);
                    }
                });
            });
        </script>
    </body>
</html>

