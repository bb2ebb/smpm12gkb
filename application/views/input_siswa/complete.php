<html class="no-js" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complete - <?php echo isset($namasiswa) ? $namasiswa : ""; ?></title>
        <link rel="stylesheet" href="./assets/0global/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/0global/css/jquery-ui.css">
        <link href="./assets/1hmscr/css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./assets/1hmscr/css/animate.css">	
        <link rel="stylesheet" href="./assets/1hmscr/css/style.css">
        <style  type="text/css">
            table tr td:nth-child(1){
                width: 220px !important;
                table-layout: fixed;
            }
            table tr td:nth-child(2){
                width: 20px !important;
                table-layout: fixed;
            }
        </style>
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
                        <div class="col-sm-12 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Biodata <?php echo isset($namasiswa) ? $namasiswa : ""; ?></h3>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="input" method="post" class="login-form">
                                    <div class="col-sm-6 form-box">
                                        <table>
                                            <tr>
                                                <td><label>Nama Lengkap </label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->namalengkap ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nama Panggilan</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->namapanggilan ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Jenis Kelamin</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->jeniskelamin ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tempat Lahir</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tempatlahir ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tanggal Lahir</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tanggallahir ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Telepon</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->notelp ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Induk Kependudukan (NIK)</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->nik ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Induk Sekolah (NIS)</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->nis ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Induk Sekolah Nasional (NISN)</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->nisn ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tinggi Badan</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo (is_null($querysiswa[0]->tinggibadan) || $querysiswa[0]->tinggibadan === "") ? "" : $querysiswa[0]->tinggibadan . " cm" ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Berat Badan</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo (is_null($querysiswa[0]->beratbadan) || $querysiswa[0]->beratbadan === "") ? "" : $querysiswa[0]->beratbadan . " Kg" ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Jumlah Saudara Kandung</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->jumlahsaudarakandung ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tanggal Masuk Sekolah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tanggalmasuksekolah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Asal Sekolah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->asalsekolah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Seri Ijazah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->noijazah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Seri SKHUN</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->noskhun ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor Peserta UN SD</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->nopesujianun ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kelas</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->ckelas ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Status</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->status ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Semester</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->smt ?></label></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 form-box">
                                        <table>
                                            <tr>
                                                <td><label>Nama Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->namaayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tempat Lahir Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tempatlahirayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tanggal Lahir Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tanggallahirayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Pekerjaan Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->pekerjaanayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kategori Pekerjaan Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->kategoripekerjaanayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Pendidikan Terakhir Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->pendidikanayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Penghasilan Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->penghasilanayah ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor HP Ayah</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->nohpayah ?></label></td>
                                            </tr>



                                            <tr>
                                                <td><label>Nama Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->namaibu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tempat Lahir Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tempatlahiribu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tanggal Lahir Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tanggallahiribu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Pekerjaan Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->pekerjaanibu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kategori Pekerjaan Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->kategoripekerjaanibu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Pendidikan Terakhir Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->pendidikanibu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Penghasilan Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->penghasilanibu ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Nomor HP Ibu</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->nohpibu ?></label></td>
                                            </tr>



                                            <tr>
                                                <td><label>Nama Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->namawali ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tempat Lahir Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tempatlahirwali ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Tanggal Lahir Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->tanggallahirwali ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Pekerjaan Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->pekerjaanwali ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kategori Pekerjaan Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->kategoripekerjaanwali ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Pendidikan Terakhir Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->pendidikanwali ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Penghasilan Wali</label></td>
                                                <td><label>:</label></td>
                                                <td><label><?php echo $querysiswa[0]->penghasilanwali ?></label></td>
                                            </tr>
                                        </table>
                                    </div>
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
        <script>$(function () {
                $("#form-tanggallahir, #form-tanggallahiribu, #form-tanggallahirwali, #form-tanggallahirayah, #form-awaltanggalmasuksekolah").datepicker();
            });
        </script>
    </body>
</html>

