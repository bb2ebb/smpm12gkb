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
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <p>Masukkan data siswa berikut ini:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="input" method="post" class="login-form">
                                    <div class="form-group">
                                        <!--<label class="sr-only" for="namalengkap">Nama Lengkap</label>-->
                                        <input name="namalengkap" placeholder="Nama Lengkap..." class="form-username form-control" id="form-namalengkap" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="namapanggilan" placeholder="Nama Panggilan..." class="form-top form-control" id="form-namapanggilan" type="text">
                                    </div>
                                    <div class="form-group">
                                        <select name="jeniskelamin" class="form-top form-control" id="form-namapanggilan">
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahir" placeholder="Tempat Lahir..." class="form-top form-control" id="form-tempatlahir" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tanggallahir" placeholder="Tanggal Lahir..." class="form-top form-control" id="form-tanggallahir" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="nik" onkeypress="return isNumberKey(event)" placeholder="Nomor Induk Kependudukan / Nomor di Kartu Keluarga..." class="form-top form-control" id="form-nik" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input name="nis" onkeypress="return isNumberKey(event)" placeholder="Nomor Induk Siswa / NIS..." class="form-top form-control" id="form-nis" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input name="nisn" onkeypress="return isNumberKey(event)" placeholder="Nomor Induk Siswa Nasional / NISN..." class="form-top form-control" id="form-nisn" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input name="beratbadan" onkeypress="return isNumberKey(event)" placeholder="Berat Badan - Satuan KG..." class="form-top form-control" id="form-beratbadan" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input name="tinggibadan" onkeypress="return isNumberKey(event)" placeholder="Tinggi Badan - Satuan cm..." class="form-top form-control" id="form-tinggibadan" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input name="jmlsaudarakandung" onkeypress="return isNumberKey(event)" placeholder="Jumlah Saudara Kandung..." class="form-top form-control" id="form-jmlsaudarakandung" type="number">
                                    </div>
                                    <div class="form-group">
                                        <input name="namaayah" placeholder="Nama Ayah..." class="form-top form-control" id="form-namaayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahirayah" placeholder="Tempat Lahir Ayah..." class="form-top form-control" id="form-tempatlahirayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tanggallahirayah" placeholder="Tanggal Lahir Ayah..." class="form-top form-control" id="form-tanggallahirayah" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="pekerjaanayah" placeholder="Pekerjaan Ayah..." class="form-top form-control" id="form-pekerjaanayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="kategoripekerjaanayah" placeholder="Kategori Pekerjaan Ayah..." class="form-top form-control" id="form-kategoripekerjaanayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="pendidikanayah" placeholder="Pendidikan Ayah..." class="form-top form-control" id="form-pendidikanayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="penghasilanayah" placeholder="Penghasilan Ayah..." class="form-top form-control" id="form-penghasilanayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="namaibu" placeholder="Nama Ibu..." class="form-top form-control" id="form-namaibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahiribu" placeholder="Tempat Lahir Ibu..." class="form-top form-control" id="form-tempatlahiribu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tanggallahiribu" placeholder="Tanggal Lahir Ibu..." class="form-top form-control" id="form-tanggallahiribu" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="pekerjaanibu" placeholder="Pekerjaan Ibu..." class="form-top form-control" id="form-pekerjaanibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="kategoripekerjaanibu" placeholder="Kategori Pekerjaan Ibu..." class="form-top form-control" id="form-kategoripekerjaanibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="pendidikanibu" placeholder="Pendidikan Ibu..." class="form-top form-control" id="form-pendidikanibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="penghasilanibu" placeholder="Penghasilan Ibu..." class="form-top form-control" id="form-penghasilanibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="namawali" placeholder="Nama Wali..." class="form-top form-control" id="form-namawali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahirwali" placeholder="Tempat Lahir Wali..." class="form-top form-control" id="form-tempatlahirwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tanggallahirwali" placeholder="Tanggal Lahir Wali..." class="form-top form-control" id="form-tanggallahirwali" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="pekerjaanwali" placeholder="Pekerjaan Wali..." class="form-top form-control" id="form-pekerjaanwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="kategoripekerjaanwali" placeholder="Kategori Pekerjaan Wali..." class="form-top form-control" id="form-kategoripekerjaanwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="pendidikanwali" placeholder="Pendidikan Wali..." class="form-top form-control" id="form-pendidikanwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="penghasilanwali" placeholder="Penghasilan Wali..." class="form-top form-control" id="form-penghasilanwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="asalsekolah" placeholder="Asal Sekolah SD..." class="form-top form-control" id="form-asalsekolah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="noijazah" placeholder="Nomor Seri Ijazah..." class="form-top form-control" id="form-noijazah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="noskhun" placeholder="Nomor Seri SKHUN..." class="form-top form-control" id="form-noskhun" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="nopesujianun" placeholder="Nomor Peserta Ujian UN SD..." class="form-top form-control" id="form-nopesujianun" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="kelas" placeholder="Kelas VII, VIII, IX..." class="form-top form-control" id="form-kelas" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="subkelas" placeholder="Sub Kelas A / B / C / D / E / F / G / H..." class="form-top form-control" id="form-subkelas" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="status" placeholder="Status di Sekolah Ini..." class="form-top form-control" id="form-status" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="smt" onkeypress="return isNumberKey(event)" placeholder="Semester..." class="form-top form-control" id="form-smt" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="awaltanggalmasuksekolah" placeholder="Awal Tanggal Masuk Sekolah..." class="form-top form-control" id="form-awaltanggalmasuksekolah" type="date">
                                    </div>
                                    <button name="submitsiswa1" type="submit" class="btn">Masukkan!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <script>$(function () {$("#form-tanggallahir, #form-tanggallahiribu, #form-tanggallahirwali, #form-tanggallahirayah, #form-awaltanggalmasuksekolah").datepicker();});</script>
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

