<!--SELECT id, namalengkap, namapanggilan, 
IF(jeniskelamin=1,'Laki-Laki','Perempuan') AS jeniskelamin, 
tempatlahir,
CONCAT(DATE_FORMAT(tanggallahir, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahir, '%M')),' ',DATE_FORMAT(tanggallahir, '%Y')) AS tanggallahir,
nik,nis,nisn,tinggibadan,
beratbadan,jumlahsaudarakandung,
CONCAT(DATE_FORMAT(tanggalmasuksekolah, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggalmasuksekolah, '%M')),' ',DATE_FORMAT(tanggalmasuksekolah, '%Y')) AS tanggalmasuksekolah,
asalsekolah,noijazah,noskhun,nopesujianun,
CONCAT((SELECT uraian FROM kelas WHERE id=kelas),' ',(SELECT uraian FROM subkelas WHERE id=subkelas)) AS ckelas,
kelas,subkelas,
(SELECT uraian FROM siswastatus WHERE id=status) AS status,
smt,
namaayah,tempatlahirayah, 
DATE_FORMAT(tanggallahirayah, '%d %M %Y') AS tanggallahirayah,
pekerjaanayah, 
(SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanayah) AS kategoripekerjaanayah, 
(SELECT uraian FROM pendidikan WHERE id=pendidikanayah) AS pendidikanayah,
(SELECT uraian FROM penghasilan WHERE id=penghasilanayah) AS penghasilanayah,
namaibu,
tempatlahiribu, 
DATE_FORMAT(tanggallahiribu, '%d %M %Y') AS tanggallahiribu,
pekerjaanibu,  
(SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanibu) AS kategoripekerjaanibu, 
(SELECT uraian FROM pendidikan WHERE id=pendidikanibu) AS pendidikanibu,
(SELECT uraian FROM penghasilan WHERE id=penghasilanibu) AS penghasilanibu, 
namawali,tempatlahirwali, 
DATE_FORMAT(tanggallahirwali, '%d %M %Y') AS tanggallahirwali,
pekerjaanwali,
(SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanwali) AS kategoripekerjaanwali, 
(SELECT uraian FROM pendidikan WHERE id=pendidikanwali) AS pendidikanwali, 
(SELECT uraian FROM penghasilan WHERE id=penghasilanwali) AS penghasilanwali, 
(SELECT GROUP_CONCAT(
   CONCAT(
      notelp,IF(ext IS NULL,'',CONCAT(' (ext: ',ext,')'))
   ) SEPARATOR ', '
) FROM siswanotelp WHERE siswanotelp.fkid=id) AS notelp,
(SELECT GROUP_CONCAT(nomor SEPARATOR ', ') FROM siswanohpayah WHERE fkid=id) AS nohpayah,
(SELECT GROUP_CONCAT(nomor SEPARATOR ', ') FROM siswanohpibu WHERE fkid=id) AS nohpibu,
dateinput
FROM siswadatainduk LIMIT 2\G

-->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index() {
        $iii = "031436 ";
        $aaa = explode("ext", $iii);
        echo strpos($iii, "397");
//        echo preg_replace("/[^0-9]/","",$iii);;
    }

    public function indonesian_date($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
        if (trim($timestamp) == '') {
            $timestamp = time();
        } elseif (!ctype_digit($timestamp)) {
            $timestamp = strtotime($timestamp);
        }
        # remove S (st,nd,rd,th) there are no such things in indonesia :p
        $date_format = preg_replace("/S/", "", $date_format);
        $pattern = array(
            '/Mon[^day]/', '/Tue[^sday]/', '/Wed[^nesday]/', '/Thu[^rsday]/',
            '/Fri[^day]/', '/Sat[^urday]/', '/Sun[^day]/', '/Monday/', '/Tuesday/',
            '/Wednesday/', '/Thursday/', '/Friday/', '/Saturday/', '/Sunday/',
            '/Jan[^uary]/', '/Feb[^ruary]/', '/Mar[^ch]/', '/Apr[^il]/', '/May/',
            '/Jun[^e]/', '/Jul[^y]/', '/Aug[^ust]/', '/Sep[^tember]/', '/Oct[^ober]/',
            '/Nov[^ember]/', '/Dec[^ember]/', '/January/', '/February/', '/March/',
            '/April/', '/June/', '/July/', '/August/', '/September/', '/October/',
            '/November/', '/December/',
        );
        $replace = array('Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min',
            'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu',
            'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des',
            'Januari', 'Februari', 'Maret', 'April', 'Juni', 'Juli', 'Agustus', 'Sepember',
            'Oktober', 'November', 'Desember',
        );
        $date = date($date_format, $timestamp);
        $date = preg_replace($pattern, $replace, $date);
        $date = "{$date} {$suffix}";
        return $date;
    }

}
