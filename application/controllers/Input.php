<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Input extends CI_Controller {
    public function index() {
        if (isset($_POST['submitsiswa1'])) {
            $namalengkap = trim($this->input->post("namalengkap"), " \t\n\r\0\x0B");
            $namapanggilan = trim($this->input->post("namapanggilan"), " \t\n\r\0\x0B");
            $jeniskelamin = trim($this->input->post("jeniskelamin"), " \t\n\r\0\x0B");
            $tempatlahir = trim($this->input->post("tempatlahir"), " \t\n\r\0\x0B");
            $tanggallahir = explode("/",trim($this->input->post("tanggallahir"), " \t\n\r\0\x0B"));
            $nik = trim($this->input->post("nik"), " \t\n\r\0\x0B");
            $nis = trim($this->input->post("nis"), " \t\n\r\0\x0B");
            $nisn = trim($this->input->post("nisn"), " \t\n\r\0\x0B");
            $beratbadan = trim($this->input->post("beratbadan"), " \t\n\r\0\x0B");
            $tinggibadan = trim($this->input->post("tinggibadan"), " \t\n\r\0\x0B");
            $jmlsaudarakandung = trim($this->input->post("jmlsaudarakandung"), " \t\n\r\0\x0B");
            
            $namaayah = trim($this->input->post("namaayah"), " \t\n\r\0\x0B");
            $tempatlahirayah = trim($this->input->post("tempatlahirayah"), " \t\n\r\0\x0B");
            $tanggallahirayah = explode("/", trim($this->input->post("tanggallahirayah"), " \t\n\r\0\x0B"));
            $pekerjaanayah = trim($this->input->post("pekerjaanayah"), " \t\n\r\0\x0B");
            $kategoripekerjaanayah = trim($this->input->post("kategoripekerjaanayah"), " \t\n\r\0\x0B");
            $pendidikanayah = trim($this->input->post("pendidikanayah"), " \t\n\r\0\x0B");
            $penghasilanayah = trim($this->input->post("penghasilanayah"), " \t\n\r\0\x0B");
            
            $namaibu = trim($this->input->post("namaibu"), " \t\n\r\0\x0B");
            $tempatlahiribu = trim($this->input->post("tempatlahiribu"), " \t\n\r\0\x0B");
            $tanggallahiribu = explode("/", trim($this->input->post("tanggallahiribu"), " \t\n\r\0\x0B"));
            $pekerjaanibu = trim($this->input->post("pekerjaanibu"), " \t\n\r\0\x0B");
            $kategoripekerjaanibu = trim($this->input->post("kategoripekerjaanibu"), " \t\n\r\0\x0B");
            $pendidikanibu = trim($this->input->post("pendidikanibu"), " \t\n\r\0\x0B");
            $penghasilanibu = trim($this->input->post("penghasilanibu"), " \t\n\r\0\x0B");
            
            $namawali = trim($this->input->post("namawali"), " \t\n\r\0\x0B");
            $tempatlahirwali = trim($this->input->post("tempatlahirwali"), " \t\n\r\0\x0B");
            $tanggallahirwali = (trim($this->input->post("tanggallahirwali") === "" || is_null(trim($this->input->post("tanggallahirwali"))))) ? NULL : explode("/", trim($this->input->post("tanggallahirwali"), " \t\n\r\0\x0B"));
            $pekerjaanwali = trim($this->input->post("pekerjaanwali"), " \t\n\r\0\x0B");
            $kategoripekerjaanwali = trim($this->input->post("kategoripekerjaanwali"), " \t\n\r\0\x0B");
            $pendidikanwali = trim($this->input->post("pendidikanwali"), " \t\n\r\0\x0B");
            $penghasilanwali = trim($this->input->post("penghasilanwali"), " \t\n\r\0\x0B");
            
            $awaltanggalmasuksekolah = (trim($this->input->post("awaltanggalmasuksekolah") === "" || is_null(trim($this->input->post("awaltanggalmasuksekolah"))))) ? NULL : explode("/", trim($this->input->post("awaltanggalmasuksekolah"), " \t\n\r\0\x0B"));
            $asalsekolah = trim($this->input->post("asalsekolah"), " \t\n\r\0\x0B");
            $noijazah = trim($this->input->post("noijazah"), " \t\n\r\0\x0B");
            $noskhun = trim($this->input->post("noskhun"), " \t\n\r\0\x0B");
            $nopesujianun = trim($this->input->post("nopesujianun"), " \t\n\r\0\x0B");
            $kelas = trim($this->input->post("kelas"), " \t\n\r\0\x0B");
            $subkelas = trim($this->input->post("subkelas"), " \t\n\r\0\x0B");
            $status = trim($this->input->post("status"), " \t\n\r\0\x0B");
            $smt = trim($this->input->post("smt"), " \t\n\r\0\x0B");
            $idsiswa = "S-".hash("sha256",strtolower($namalengkap.$jeniskelamin.$tempatlahir.$tanggallahir[2].$tanggallahir[0].$tanggallahir[1]));
            echo $idsiswa;
            $datainduksiswa = $this->db->insert("siswadatainduk", ["namalengkap"=>$namalengkap,
                    "namapanggilan"=>$namapanggilan,
                "jeniskelamin"=>$jeniskelamin,
                "tempatlahir"=>$tempatlahir,
                "tanggallahir"=>$tanggallahir[2]."-".$tanggallahir[0]."-".$tanggallahir[1],
                "nik"=>$nik,
                "nis"=>$nis,
                "nisn"=>$nisn,
                "tinggibadan"=>$tinggibadan,
                "beratbadan"=>$beratbadan,
                "jumlahsaudarakandung"=>$jmlsaudarakandung,
                "namaayah"=>$namaayah,
                "tempatlahirayah"=>$tempatlahirayah,
                "tanggallahirayah"=>$tanggallahirayah[2]."-".$tanggallahirayah[0]."-".$tanggallahirayah[1],
                "pekerjaanayah"=>$pekerjaanayah,
                "kategoripekerjaanayah"=>$kategoripekerjaanayah,
                "pendidikanayah"=>$pendidikanayah,
                "penghasilanayah"=>$penghasilanayah,
                "namawali"=>$namawali,
                "tempatlahirwali"=>$tempatlahirwali,
                "tanggallahirwali"=>$tanggallahirwali[2]."-".$tanggallahirwali[0]."-".$tanggallahirwali[1],
                "pekerjaanwali"=>$pekerjaanwali,
                "kategoripekerjaanwali"=>$kategoripekerjaanwali,
                "pendidikanwali"=>$pendidikanwali,
                "penghasilanwali"=>$penghasilanwali,
                "namaibu"=>$namaibu,
                "tempatlahiribu"=>$tempatlahiribu,
                "tanggallahiribu"=>$tanggallahiribu[2]."-".$tanggallahiribu[0]."-".$tanggallahiribu[1],
                "pekerjaanibu"=>$pekerjaanibu,
                "kategoripekerjaanibu"=>$kategoripekerjaanibu,
                "pendidikanibu"=>$pendidikanibu,
                "penghasilanibu"=>$penghasilanibu,
                "tanggalmasuksekolah"=>$awaltanggalmasuksekolah[2]."-".$awaltanggalmasuksekolah[0]."-".$awaltanggalmasuksekolah[1],
                "asalsekolah"=>$asalsekolah,
                "noijazah"=>$noijazah,
                "noskhun"=>$noskhun,
                "nopesujianun"=>$nopesujianun,
                "kelas"=>$kelas,
                "subkelas"=>$subkelas,
                "status"=>$status,
                "smt"=>$smt]);
            echo $datainduksiswa;
        }else{
            $this->load->view('input_siswa/inputsiswa');
        }
    }

}
?>
