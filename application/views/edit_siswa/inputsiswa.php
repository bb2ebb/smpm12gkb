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
                                    <?php echo (isset($error)?$error:"") ?>
                                    <p>Masukkan data siswa berikut ini:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="edit" method="post" class="login-form">
                                    <input type="hidden" name="idsiswa" value="<?php echo $datasiswa[0]->id ?>">
                                    <div class="form-group">
                                        <!--<label for="namalengkap">Nama Lengkap</label>-->
                                        <input name="namalengkap" value="<?php echo $datasiswa[0]->namalengkap ?>" placeholder="Nama Lengkap..." class="form-username form-control" id="form-namalengkap" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="namapanggilan" value="<?php echo $datasiswa[0]->namapanggilan ?>" placeholder="Nama Panggilan..." class="form-top form-control" id="form-namapanggilan" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="jeniskelamin">Jenis Kelamin</label>
                                        <select name="jeniskelamin" class="form-top form-control" id="form-namapanggilan">
                                            <option value="1" <?php echo ($datasiswa[0]->jeniskelamin === '1')?'selected':'' ?>>Laki - Laki</option>
                                            <option value="2" <?php echo ($datasiswa[0]->jeniskelamin === '2')?'selected':'' ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahir" value="<?php echo $datasiswa[0]->tempatlahir ?>" placeholder="Tempat Lahir..." class="form-top form-control" id="form-tempatlahir" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tanggallahir" value="<?php $a = explode("-", $datasiswa[0]->tanggallahir);echo $a[1].'/'.$a[2].'/'.$a[0]  ?>" placeholder="Tanggal Lahir..." class="form-top form-control" id="form-tanggallahir" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="nik" value="<?php echo $datasiswa[0]->nik ?>" onkeypress="return isNumberKey(event)" placeholder="Nomor Induk Kependudukan / Nomor di Kartu Keluarga..." class="form-top form-control" id="form-nik" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="nis" value="<?php echo $datasiswa[0]->nis ?>" onkeypress="return isNumberKey(event)" placeholder="Nomor Induk Siswa / NIS..." class="form-top form-control" id="form-nis" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="nisn" value="<?php echo $datasiswa[0]->nisn ?>" onkeypress="return isNumberKey(event)" placeholder="Nomor Induk Siswa Nasional / NISN..." class="form-top form-control" id="form-nisn" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="beratbadan" value="<?php echo $datasiswa[0]->beratbadan ?>" onkeypress="return isNumberKey(event)" placeholder="Berat Badan - Satuan KG..." class="form-top form-control" id="form-beratbadan" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tinggibadan" value="<?php echo $datasiswa[0]->tinggibadan ?>" onkeypress="return isNumberKey(event)" placeholder="Tinggi Badan - Satuan cm..." class="form-top form-control" id="form-tinggibadan" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="jmlsaudarakandung" value="<?php echo $datasiswa[0]->jumlahsaudarakandung ?>" onkeypress="return isNumberKey(event)" placeholder="Jumlah Saudara Kandung..." class="form-top form-control" id="form-jmlsaudarakandung" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="asalsekolah" value="<?php echo $datasiswa[0]->asalsekolah ?>" placeholder="Asal Sekolah SD..." class="form-top form-control" id="form-asalsekolah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="noijazah" value="<?php echo $datasiswa[0]->noijazah ?>" placeholder="Nomor Seri Ijazah... contoh: DN-05 Dd/13 0058196" class="form-top form-control" id="form-noijazah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="noskhun" value="<?php echo $datasiswa[0]->noskhun ?>" placeholder="Nomor Seri SKHUN... contoh: DN-05 D.sd 0084168" class="form-top form-control" id="form-noskhun" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="nopesujianun" value="<?php echo $datasiswa[0]->nopesujianun ?>" placeholder="Nomor Peserta Ujian UN SD..." class="form-top form-control" id="form-nopesujianun" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Kelas</label>
                                        <select name="kelas" class="form-top form-control" id="form-kelas">
                                            <option value="7" <?php echo ($datasiswa[0]->kelas === '7')?'selected':'' ?>>VII</option>
                                            <option value="8" <?php echo ($datasiswa[0]->kelas === '8')?'selected':'' ?>>VIII</option>
                                            <option value="9" <?php echo ($datasiswa[0]->kelas === '9')?'selected':'' ?>>IX</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subkelas">Sub Kelas</label>
                                        <select name="subkelas" class="form-top form-control" id="form-subkelas">
                                            <?php
                                            foreach ($subkelas as $value) {
                                                if ($value->id === $datasiswa[0]->subkelas) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status di Sekolah Ini</label>
                                        <select name="status" class="form-top form-control" id="form-smt">
                                            <?php
                                            foreach ($statussiswa as $value) {
                                                if ($value->id === $datasiswa[0]->status) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="smt">Semester</label>
                                        <select name="smt" class="form-top form-control" id="form-smt">
                                            <?php
                                            echo isset($smt)?$smt:"";
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php $a = explode("-", $datasiswa[0]->tanggalmasuksekolah);echo (is_null($datasiswa[0]->tanggalmasuksekolah) || $datasiswa[0]->tanggalmasuksekolah==='')?'':$a[1].'/'.$a[2].'/'.$a[0]  ?>" name="awaltanggalmasuksekolah" placeholder="Awal Tanggal Masuk Sekolah..." class="form-top form-control" id="form-awaltanggalmasuksekolah" type="date">
                                    </div>
                                    <hr>
                                    <div class="form-group" style="margin-top: 10%">
                                        <input name="namaayah" value="<?php echo $datasiswa[0]->namaayah ?>" placeholder="Nama Ayah..." class="form-top form-control" id="form-namaayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahirayah" value="<?php echo $datasiswa[0]->tempatlahirayah ?>" placeholder="Tempat Lahir Ayah..." class="form-top form-control" id="form-tempatlahirayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php $a = explode("-", $datasiswa[0]->tanggallahirayah);echo (is_null($datasiswa[0]->tanggallahirayah) || $datasiswa[0]->tanggallahirayah==='')?'':$a[1].'/'.$a[2].'/'.$a[0]  ?>" name="tanggallahirayah" placeholder="Tanggal Lahir Ayah..." class="form-top form-control" id="form-tanggallahirayah" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="pekerjaanayah" value="<?php echo $datasiswa[0]->pekerjaanayah ?>" placeholder="Pekerjaan Ayah..." class="form-top form-control" id="form-pekerjaanayah" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategoripekerjaanayah">Kategori Pekerjaan Ayah</label>
                                        <select name="kategoripekerjaanayah" class="form-top form-control" id="form-kategoripekerjaanayah">
                                            <?php
                                            foreach ($kategoripekerjaan as $value) {
                                                if ($value->id === $datasiswa[0]->kategoripekerjaanayah) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikanayah">Pendidikan Terakhir Ayah</label>
                                        <select name="pendidikanayah" class="form-top form-control" id="form-pendidikanayah">
                                            <?php
                                            foreach ($pendidikan as $value) {
                                                if ($value->id === $datasiswa[0]->pendidikanayah) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penghasilanayah">Penghasilan Ayah</label>
                                        <select name="penghasilanayah" class="form-top form-control" id="form-penghasilanayah">
                                            <?php
                                            foreach ($penghasilan as $value) {
                                                if ($value->id === $datasiswa[0]->penghasilanayah) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <hr/>
                                    
                                    
                                    <div class="form-group" style="margin-top: 10%">
                                        <input name="namaibu" value="<?php echo $datasiswa[0]->namaibu ?>" placeholder="Nama Ibu..." class="form-top form-control" id="form-namaibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahiribu" value="<?php echo $datasiswa[0]->tempatlahiribu ?>" placeholder="Tempat Lahir Ibu..." class="form-top form-control" id="form-tempatlahiribu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php $a = explode("-", $datasiswa[0]->tanggallahiribu);echo (is_null($datasiswa[0]->tanggallahiribu) || $datasiswa[0]->tanggallahiribu==='')?'':$a[1].'/'.$a[2].'/'.$a[0]  ?>" name="tanggallahiribu" placeholder="Tanggal Lahir Ibu..." class="form-top form-control" id="form-tanggallahiribu" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="pekerjaanibu" value="<?php echo $datasiswa[0]->pekerjaanibu ?>" placeholder="Pekerjaan Ibu..." class="form-top form-control" id="form-pekerjaanibu" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategoripekerjaanibu">Kategori Pekerjaan Ibu</label>
                                        <select name="kategoripekerjaanibu" class="form-top form-control" id="form-kategoripekerjaanibu">
                                            <?php
                                            foreach ($kategoripekerjaan as $value) {
                                                if ($value->id === $datasiswa[0]->kategoripekerjaanibu) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikanibu">Pendidikan Terakhir Ibu</label>
                                        <select name="pendidikanibu" class="form-top form-control" id="form-pendidikanibu">
                                            <?php
                                            foreach ($pendidikan as $value) {
                                                if ($value->id === $datasiswa[0]->pendidikanibu) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penghasilanibu">Penghasilan Ibu</label>
                                        <select name="penghasilanibu" class="form-top form-control" id="form-penghasilanibu">
                                            <?php
                                            foreach ($penghasilan as $value) {
                                                if ($value->id === $datasiswa[0]->penghasilanibu) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <hr/>
                                    
                                    
                                    <div class="form-group" style="margin-top: 10%">
                                        <input name="namawali" value="<?php echo $datasiswa[0]->namawali ?>" placeholder="Nama Wali..." class="form-top form-control" id="form-namawali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="tempatlahirwali" value="<?php echo $datasiswa[0]->tempatlahirwali ?>" placeholder="Tempat Lahir Wali..." class="form-top form-control" id="form-tempatlahirwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php $a = explode("-", $datasiswa[0]->tanggallahirwali);echo (is_null($datasiswa[0]->tanggallahirwali) || $datasiswa[0]->tanggallahirwali==='')?'':$a[1].'/'.$a[2].'/'.$a[0]  ?>" name="tanggallahirwali" placeholder="Tanggal Lahir Wali..." class="form-top form-control" id="form-tanggallahirwali" type="date">
                                    </div>
                                    <div class="form-group">
                                        <input name="pekerjaanwali" value="<?php echo $datasiswa[0]->pekerjaanwali ?>" placeholder="Pekerjaan Wali..." class="form-top form-control" id="form-pekerjaanwali" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategoripekerjaanwali">Kategori Pekerjaan Wali</label>
                                        <select name="kategoripekerjaanwali" class="form-top form-control" id="form-kategoripekerjaanwali">
                                            <?php
                                            foreach ($kategoripekerjaan as $value) {
                                                if ($value->id === $datasiswa[0]->kategoripekerjaanwali) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikanwali">Pendidikan Terakhir Wali</label>
                                        <select name="pendidikanwali" class="form-top form-control" id="form-pendidikanwali">
                                            <?php
                                            foreach ($pendidikan as $value) {
                                                if ($value->id === $datasiswa[0]->pendidikanwali) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penghasilanwali">Penghasilan Wali</label>
                                        <select name="penghasilanwali" class="form-top form-control" id="form-penghasilanwali">
                                            <?php
                                            foreach ($penghasilan as $value) {
                                                if ($value->id === $datasiswa[0]->penghasilanwali) 
                                                    echo '<option value="'.$value->id.'" selected>'.$value->uraian.'</option>';
                                                else echo '<option value="'.$value->id.'">'.$value->uraian.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <hr/>
                                    
                                    
                                    <div class="form-group">
                                        <button name="submiteditsiswa" type="submit" class="btn">Edit!</button>
                                        <button name="submitskipeditsiswa" type="submit" class="btn">Skip!</button>
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

