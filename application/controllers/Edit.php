<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

    public function index() {
        if (isset($_POST['editsiswa'])) {
            $id = $this->input->post('id');
            $data['datasiswa'] = $this->db->get_where('siswadatainduk', ['id' => $id])->result();
            $data['subkelas'] = $this->db->get('subkelas')->result();
            $data['kategoripekerjaan'] = $this->db->get('kategoripekerjaan')->result();
            $data['pendidikan'] = $this->db->get('pendidikan')->result();
            $data['penghasilan'] = $this->db->get('penghasilan')->result();
            $data['statussiswa'] = $this->db->get('siswastatus')->result();
            $data['smt'] = (date('m') >= 1 && date('m') < 6) ? '<option value="2">2</option><option value="4">4</option><option value="6">6</option>' : '<option value="1">1</option><option value="3">3</option><option value="5">5</option>';
            
            $this->load->view('edit_siswa/inputsiswa', $data);
        } elseif (isset($_POST['submiteditsiswa'])) {
            $id = $this->input->post('idsiswa');
            $namalengkap = trim($this->input->post("namalengkap"), " \t\n\r\0\x0B");
            $namapanggilan = trim($this->input->post("namapanggilan"), " \t\n\r\0\x0B");
            $jeniskelamin = trim($this->input->post("jeniskelamin"), " \t\n\r\0\x0B");
            $tempatlahir = trim($this->input->post("tempatlahir"), " \t\n\r\0\x0B");
            $tanggallahir = (is_null($this->input->post("tanggallahir")) || $this->input->post("tanggallahir") === "") ? NULL : explode("/", trim($this->input->post("tanggallahir"), " \t\n\r\0\x0B"));
            $nik = trim($this->input->post("nik"), " \t\n\r\0\x0B");
            $nis = trim($this->input->post("nis"), " \t\n\r\0\x0B");
            $nisn = trim($this->input->post("nisn"), " \t\n\r\0\x0B");
            $beratbadan = trim($this->input->post("beratbadan"), " \t\n\r\0\x0B");
            $tinggibadan = trim($this->input->post("tinggibadan"), " \t\n\r\0\x0B");
            $jmlsaudarakandung = trim($this->input->post("jmlsaudarakandung"), " \t\n\r\0\x0B");

            $namaayah = trim($this->input->post("namaayah"), " \t\n\r\0\x0B");
            $tempatlahirayah = trim($this->input->post("tempatlahirayah"), " \t\n\r\0\x0B");
            $tanggallahirayah = (is_null($this->input->post("tanggallahirayah")) || $this->input->post("tanggallahirayah") === "") ? NULL : explode("/", trim($this->input->post("tanggallahirayah"), " \t\n\r\0\x0B"));
            $pekerjaanayah = trim($this->input->post("pekerjaanayah"), " \t\n\r\0\x0B");
            $kategoripekerjaanayah = trim($this->input->post("kategoripekerjaanayah"), " \t\n\r\0\x0B");
            $pendidikanayah = trim($this->input->post("pendidikanayah"), " \t\n\r\0\x0B");
            $penghasilanayah = trim($this->input->post("penghasilanayah"), " \t\n\r\0\x0B");

            $namaibu = trim($this->input->post("namaibu"), " \t\n\r\0\x0B");
            $tempatlahiribu = trim($this->input->post("tempatlahiribu"), " \t\n\r\0\x0B");
            $tanggallahiribu = (is_null($this->input->post("tanggallahiribu")) || $this->input->post("tanggallahiribu") === "") ? NULL : explode("/", trim($this->input->post("tanggallahiribu"), " \t\n\r\0\x0B"));
            $pekerjaanibu = trim($this->input->post("pekerjaanibu"), " \t\n\r\0\x0B");
            $kategoripekerjaanibu = trim($this->input->post("kategoripekerjaanibu"), " \t\n\r\0\x0B");
            $pendidikanibu = trim($this->input->post("pendidikanibu"), " \t\n\r\0\x0B");
            $penghasilanibu = trim($this->input->post("penghasilanibu"), " \t\n\r\0\x0B");

            $namawali = trim($this->input->post("namawali"), " \t\n\r\0\x0B");
            $tempatlahirwali = trim($this->input->post("tempatlahirwali"), " \t\n\r\0\x0B");
            $tanggallahirwali = (is_null($this->input->post("tanggallahirwali")) || $this->input->post("tanggallahirwali") === "") ? NULL : explode("/", trim($this->input->post("tanggallahirwali"), " \t\n\r\0\x0B"));
            $pekerjaanwali = trim($this->input->post("pekerjaanwali"), " \t\n\r\0\x0B");
            $kategoripekerjaanwali = trim($this->input->post("kategoripekerjaanwali"), " \t\n\r\0\x0B");
            $pendidikanwali = trim($this->input->post("pendidikanwali"), " \t\n\r\0\x0B");
            $penghasilanwali = trim($this->input->post("penghasilanwali"), " \t\n\r\0\x0B");

            $awaltanggalmasuksekolah = (is_null($this->input->post("awaltanggalmasuksekolah")) || $this->input->post("awaltanggalmasuksekolah") === "") ? NULL : explode("/", trim($this->input->post("awaltanggalmasuksekolah"), " \t\n\r\0\x0B"));
            $asalsekolah = trim($this->input->post("asalsekolah"), " \t\n\r\0\x0B");
            $noijazah = trim($this->input->post("noijazah"), " \t\n\r\0\x0B");
            $noskhun = trim($this->input->post("noskhun"), " \t\n\r\0\x0B");
            $nopesujianun = trim($this->input->post("nopesujianun"), " \t\n\r\0\x0B");
            $kelas = trim($this->input->post("kelas"), " \t\n\r\0\x0B");
            $subkelas = trim($this->input->post("subkelas"), " \t\n\r\0\x0B");
            $status = trim($this->input->post("status"), " \t\n\r\0\x0B");
            $smt = trim($this->input->post("smt"), " \t\n\r\0\x0B");
            
            $this->db->update("siswadatainduk", [
                "namalengkap" => (is_null($namalengkap) || $namalengkap === "") ? NULL : $namalengkap,
                "namapanggilan" => (is_null($namapanggilan) || $namapanggilan === "") ? NULL : $namapanggilan,
                "jeniskelamin" => $jeniskelamin,
                "tempatlahir" => (is_null($tempatlahir) || $tempatlahir === "") ? NULL : $tempatlahir,
                "tanggallahir" => (is_null($tanggallahir) || $tanggallahir === "") ? NULL : $tanggallahir[2] . "-" . $tanggallahir[0] . "-" . $tanggallahir[1],
                "nik" => (is_null($nik) || $nik === "") ? NULL : $nik,
                "nis" => (is_null($nis) || $nis === "") ? NULL : $nis,
                "nisn" => (is_null($nisn) || $nisn === "") ? NULL : $nisn,
                "tinggibadan" => (is_null($tinggibadan) || $tinggibadan === "") ? NULL : $tinggibadan,
                "beratbadan" => (is_null($beratbadan) || $beratbadan === "") ? NULL : $beratbadan,
                "jumlahsaudarakandung" => (is_null($jmlsaudarakandung) || $jmlsaudarakandung === "") ? NULL : $jmlsaudarakandung,
                "namaayah" => (is_null($namaayah) || $namaayah === "") ? NULL : $namaayah,
                "tempatlahirayah" => (is_null($tempatlahirayah) || $tempatlahirayah === "") ? NULL : $tempatlahirayah,
                "tanggallahirayah" => (is_null($tanggallahirayah) || $tanggallahirayah === "") ? NULL : $tanggallahirayah[2] . "-" . $tanggallahirayah[0] . "-" . $tanggallahirayah[1],
                "pekerjaanayah" => (is_null($pekerjaanayah) || $pekerjaanayah === "") ? NULL : $pekerjaanayah,
                "kategoripekerjaanayah" => (is_null($kategoripekerjaanayah) || $kategoripekerjaanayah === "") ? NULL : $kategoripekerjaanayah,
                "pendidikanayah" => (is_null($pendidikanayah) || $pendidikanayah === "") ? NULL : $pendidikanayah,
                "penghasilanayah" => (is_null($penghasilanayah) || $penghasilanayah === "") ? NULL : $penghasilanayah,
                "namawali" => (is_null($namawali) || $namawali === "") ? NULL : $namawali,
                "tempatlahirwali" => (is_null($tempatlahirwali) || $tempatlahirwali === "") ? NULL : $tempatlahirwali,
                "tanggallahirwali" => (is_null($tanggallahirwali) || $tanggallahirwali === "") ? NULL : $tanggallahirwali[2] . "-" . $tanggallahirwali[0] . "-" . $tanggallahirwali[1],
                "pekerjaanwali" => (is_null($pekerjaanwali) || $pekerjaanwali === "") ? NULL : $pekerjaanwali,
                "kategoripekerjaanwali" => (is_null($kategoripekerjaanwali) || $kategoripekerjaanwali === "") ? NULL : $kategoripekerjaanwali,
                "pendidikanwali" => (is_null($pendidikanwali) || $pendidikanwali === "") ? NULL : $pendidikanwali,
                "penghasilanwali" => (is_null($penghasilanwali) || $penghasilanwali === "") ? NULL : $penghasilanwali,
                "namaibu" => (is_null($namaibu) || $namaibu === "") ? NULL : $namaibu,
                "tempatlahiribu" => (is_null($tempatlahiribu) || $tempatlahiribu === "") ? NULL : $tempatlahiribu,
                "tanggallahiribu" => (is_null($tanggallahiribu)) ? NULL : $tanggallahiribu[2] . "-" . $tanggallahiribu[0] . "-" . $tanggallahiribu[1],
                "pekerjaanibu" => (is_null($pekerjaanibu) || $pekerjaanibu === "") ? NULL : $pekerjaanibu,
                "kategoripekerjaanibu" => (is_null($kategoripekerjaanibu) || $kategoripekerjaanibu === "") ? NULL : $kategoripekerjaanibu,
                "pendidikanibu" => (is_null($pendidikanibu) || $pendidikanibu === "") ? NULL : $pendidikanibu,
                "penghasilanibu" => (is_null($penghasilanibu) || $penghasilanibu === "") ? NULL : $penghasilanibu,
                "tanggalmasuksekolah" => (is_null($awaltanggalmasuksekolah)) ? NULL : $awaltanggalmasuksekolah[2] . "-" . $awaltanggalmasuksekolah[0] . "-" . $awaltanggalmasuksekolah[1],
                "asalsekolah" => (is_null($asalsekolah) || $asalsekolah === "") ? NULL : $asalsekolah,
                "noijazah" => (is_null($noijazah) || $noijazah === "") ? NULL : $noijazah,
                "noskhun" => (is_null($noskhun) || $noskhun === "") ? NULL : $noskhun,
                "nopesujianun" => (is_null($nopesujianun) || $nopesujianun === "") ? NULL : $nopesujianun,
                "kelas" => (is_null($kelas) || $kelas === "") ? NULL : $kelas,
                "subkelas" => (is_null($subkelas) || $subkelas === "") ? NULL : $subkelas,
                "status" => (is_null($status) || $status === "") ? NULL : $status,
                "smt" => (is_null($smt) || $smt === "") ? NULL : $smt], ['id' => $id]);
            $data['namasiswa'] = $namalengkap;
            $data['idsiswa'] = $id;
//                $data['alamat'] = $this->db->query("SELECT siswaalamat.id, siswaalamat.alamat, siswaalamat.kelurahan, siswaalamat.dusun, siswaalamat.rt, siswaalamat.rw, provinsi.nama AS provinsi, kabupaten.nama AS kabupaten, kecamatan.nama AS kecamatan, siswaalamat.kodepos AS kodepos FROM siswaalamat, provinsi, kabupaten, kecamatan WHERE provinsi.id=siswaalamat.provinsi AND kabupaten.id=siswaalamat.kabupaten AND kecamatan.id=siswaalamat.kecamatan AND siswaalamat.fkid='" . $id . "'")->result();
//                $data['provinsi'] = $this->db->order_by("nama", "ASC")->get("provinsi")->result();
            $data['datasiswa'] = $this->db->get_where('siswadatainduk', ['id' => $id])->result();
            $data['subkelas'] = $this->db->get('subkelas')->result();
            $data['kategoripekerjaan'] = $this->db->get('kategoripekerjaan')->result();
            $data['pendidikan'] = $this->db->get('pendidikan')->result();
            $data['penghasilan'] = $this->db->get('penghasilan')->result();
            $data['statussiswa'] = $this->db->get('siswastatus')->result();
            $data['smt'] = (date('m') >= 1 && date('m') < 6) ? '<option value="2">2</option><option value="4">4</option><option value="6">6</option>' : '<option value="1">1</option><option value="3">3</option><option value="5">5</option>';

            $this->load->view('edit_siswa/inputsiswa', $data);
            
        } elseif (isset($_POST['submitskipeditsiswa'])) {
            $id = $this->input->post("idsiswa");
            $namalengkap = $this->db->get_where('siswadatainduk', ['id'=>$id])->result()[0]->namalengkap;
            $data['alamat'] = $this->db->query("SELECT siswaalamat.id, siswaalamat.alamat, siswaalamat.kelurahan, siswaalamat.dusun, siswaalamat.rt, siswaalamat.rw, provinsi.nama AS provinsi, kabupaten.nama AS kabupaten, kecamatan.nama AS kecamatan, siswaalamat.kodepos AS kodepos FROM siswaalamat, provinsi, kabupaten, kecamatan WHERE provinsi.id=siswaalamat.provinsi AND kabupaten.id=siswaalamat.kabupaten AND kecamatan.id=siswaalamat.kecamatan AND siswaalamat.fkid='" . $id . "'")->result();
            $data['provinsi'] = $this->db->order_by("nama", "ASC")->get("provinsi")->result();
            $data['idsiswa'] = $id;
            $data['namasiswa'] = $namalengkap;
            $this->load->view('edit_siswa/alamatsiswa', $data);
        } elseif (isset($_POST['deletealamatsiswa'])) {
            $key = $this->input->post('id');
            $this->db->delete("siswaalamat", ["id" => $key]);

            $id = $this->input->post("idsiswa");
            $namalengkap = $this->db->get_where('siswadatainduk', ['id'=>$id])->result()[0]->namalengkap;
            $data['alamat'] = $this->db->query("SELECT siswaalamat.id, siswaalamat.alamat, siswaalamat.kelurahan, siswaalamat.dusun, siswaalamat.rt, siswaalamat.rw, (SELECT provinsi.nama FROM provinsi WHERE provinsi.id=siswaalamat.provinsi) AS provinsi, (SELECT kabupaten.nama FROM kabupaten WHERE kabupaten.id=siswaalamat.kabupaten) AS kabupaten, (SELECT kecamatan.nama FROM kecamatan WHERE kecamatan.id=siswaalamat.kecamatan) AS kecamatan, siswaalamat.kodepos AS kodepos FROM siswaalamat WHERE siswaalamat.fkid='" . $id . "'")->result();
            $data['provinsi'] = $this->db->order_by("nama", "ASC")->get("provinsi")->result();
            $data['idsiswa'] = $id;
            $data['namasiswa'] = $namalengkap;
            $this->load->view('edit_siswa/alamatsiswa', $data);
        } elseif (isset($_POST['submitalamatsiswa'])) {
            $provinsi = $this->input->post('provinsi');
            $kabupaten = $this->input->post('kabupaten');
            $kecamatan = $this->input->post('kecamatan');
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $alamat = trim($this->input->post("alamat"), " \t\r\0\x0B");
            $desa = trim($this->input->post("desa"), " \t\n\r\0\x0B");
            $dusun = trim($this->input->post("dusun"), " \t\n\r\0\x0B");
            $rt = trim($this->input->post("rt"), " \t\n\r\0\x0B");
            $rw = trim($this->input->post("rw"), " \t\n\r\0\x0B");
            $kodepos = trim($this->input->post("kodepos"), " \t\n\r\0\x0B");
            $idalamat = "SA-" . hash("sha256", strtolower($idsiswa . $alamat));
            if ($this->db->get_where("siswaalamat", ["id" => $idalamat])->num_rows()) {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['provinsi'] = $this->db->order_by("nama", "ASC")->get("provinsi")->result();
                $data['alamat'] = $this->db->query("SELECT siswaalamat.id, siswaalamat.alamat, siswaalamat.kelurahan, siswaalamat.dusun, siswaalamat.rt, siswaalamat.rw, provinsi.nama AS provinsi, kabupaten.nama AS kabupaten, kecamatan.nama AS kecamatan, siswaalamat.kodepos AS kodepos FROM siswaalamat, provinsi, kabupaten, kecamatan WHERE provinsi.id=siswaalamat.provinsi AND kabupaten.id=siswaalamat.kabupaten AND kecamatan.id=siswaalamat.kecamatan AND siswaalamat.fkid='" . $idsiswa . "'")->result();
                $data["error"] = '<label style="background-color: red">MAAF DATA SUDAH ADA SEBELUMNYA</label>';
                $this->load->view('edit_siswa/alamatsiswa', $data);
            } elseif (is_null($alamat) || $alamat === "") {
                $data['namasiswa'] = $namalengkap;
                $data['idsiswa'] = $idsiswa;
                $data['provinsi'] = $this->db->order_by("nama", "ASC")->get("provinsi")->result();
                $data['alamat'] = $this->db->query("SELECT siswaalamat.id, siswaalamat.alamat, siswaalamat.kelurahan, siswaalamat.dusun, siswaalamat.rt, siswaalamat.rw, provinsi.nama AS provinsi, kabupaten.nama AS kabupaten, kecamatan.nama AS kecamatan, siswaalamat.kodepos AS kodepos FROM siswaalamat, provinsi, kabupaten, kecamatan WHERE provinsi.id=siswaalamat.provinsi AND kabupaten.id=siswaalamat.kabupaten AND kecamatan.id=siswaalamat.kecamatan AND siswaalamat.fkid='" . $idsiswa . "'")->result();
                $data["error"] = '<label style="background-color: red">Kalau ingin menambahkan alamat, kolom alamat wajib diisi atau tekan tombol selanjutnya apabila tidak akan mengisikan alamat lagi</label>';
                $this->load->view('edit_siswa/alamatsiswa', $data);
            } else {
                $this->db->insert("siswaalamat", ["fkid" => $idsiswa, "alamat" => $alamat,
                    "kelurahan" => (is_null($desa) || $desa === "") ? NULL : $desa,
                    "dusun" => (is_null($dusun) || $dusun === "") ? NULL : $dusun,
                    "rt" => (is_null($rt) || $rt === "") ? NULL : $rt,
                    "rw" => (is_null($rw) || $rw === "") ? NULL : $rw,
                    "provinsi" => $provinsi,
                    "kabupaten" => $kabupaten,
                    "kecamatan" => $kecamatan,
                    "kodepos" => (is_null($kodepos) || $kodepos === "") ? NULL : $kodepos
                ]);
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['provinsi'] = $this->db->order_by("nama", "ASC")->get("provinsi")->result();
                $data['alamat'] = $this->db->query("SELECT siswaalamat.id, siswaalamat.alamat, siswaalamat.kelurahan, siswaalamat.dusun, siswaalamat.rt, siswaalamat.rw, provinsi.nama AS provinsi, kabupaten.nama AS kabupaten, kecamatan.nama AS kecamatan, siswaalamat.kodepos AS kodepos FROM siswaalamat, provinsi, kabupaten, kecamatan WHERE provinsi.id=siswaalamat.provinsi AND kabupaten.id=siswaalamat.kabupaten AND kecamatan.id=siswaalamat.kecamatan AND siswaalamat.fkid='" . $idsiswa . "'")->result();
                
                $this->load->view('edit_siswa/alamatsiswa', $data);
            }
        } elseif (isset($_POST['selanjutnyaalamatsiswa'])) {
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $data['namasiswa'] = $namasiswa;
            $data['idsiswa'] = $idsiswa;
            $data['tlp'] = $this->db->get_where("siswanotelp", ["fkid" => $idsiswa])->result();
            $this->load->view('edit_siswa/telepon', $data);
        } elseif (isset($_POST['deleteteleponsiswa'])) {
            $key = $this->input->post('id');
            $this->db->delete("siswanotelp", ["id" => $key]);

            $id = $this->input->post("idsiswa");
            $namalengkap = $this->db->get_where('siswadatainduk', ['id'=>$id])->result()[0]->namalengkap;
            $data['tlp'] = $this->db->get_where("siswanotelp", ["fkid" => $id])->result();
            $data['idsiswa'] = $id;
            $data['namasiswa'] = $namalengkap;
            $this->load->view('edit_siswa/telepon', $data);
        } elseif (isset($_POST['submitteleponsiswa'])) {
            $idsiswa = $this->input->post("idsiswa");
            $namasiswa = $this->input->post("namasiswa");
            $notelp = "";
            $exttelp = "";
            $a = $this->input->post("notelp");
            if (strpos($a, "ext") > 0) {
                $b = explode("ext", $a);
                $notelp = preg_replace("/[^0-9]/", "", trim($b[0], " \t\r\0\x0B"));
                $exttelp = preg_replace("/[^0-9]/", "", trim($b[1], " \t\r\0\x0B"));
            } else {
                $notelp = preg_replace("/[^0-9]/", "", trim($this->input->post("notelp"), " \t\r\0\x0B"));
                $exttelp = preg_replace("/[^0-9]/", "", trim($this->input->post("exttelp"), " \t\r\0\x0B"));
            }
            $idtelp = "ST-" . hash("sha256", strtolower($idsiswa . $notelp));
            if ($this->db->get_where("siswanotelp", ["id" => $idtelp])->num_rows()) {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['tlp'] = $this->db->get_where("siswanotelp", ["fkid" => $idsiswa])->result();
                $data["error"] = '<label style="background-color: red">MAAF DATA SUDAH ADA SEBELUMNYA</label>';
                $this->load->view('edit_siswa/telepon', $data);
            } elseif (is_null($notelp) || $notelp === "") {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['tlp'] = $this->db->get_where("siswanotelp", ["fkid" => $idsiswa])->result();
                $data["error"] = '<label style="background-color: red">Kalau ingin menambahkan nomor telepon, kolom nomor telepon wajib diisi atau tekan tombol selanjutnya apabila tidak akan mengisikan nomor telepon lagi</label>';
                $this->load->view('edit_siswa/telepon', $data);
            } else {
                $this->db->insert("siswanotelp", ["fkid" => $idsiswa,
                    "ext" => (is_null($exttelp) || $exttelp === "") ? NULL : $exttelp,
                    "notelp" => (is_null($notelp) || $notelp === "") ? NULL : $notelp
                ]);
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['tlp'] = $this->db->get_where("siswanotelp", ["fkid" => $idsiswa])->result();
                $this->load->view('edit_siswa/telepon', $data);
            }
        } elseif (isset($_POST['selanjutnyateleponsiswa'])) {
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $data['namasiswa'] = $namasiswa;
            $data['idsiswa'] = $idsiswa;
            $data['nohpayah'] = $this->db->get_where("siswanohpayah", ["fkid" => $idsiswa])->result();
            $this->load->view('edit_siswa/hpayah', $data);
        } elseif (isset($_POST['submithpayahsiswa'])) {
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $hpayahsiswa = preg_replace("/[^0-9]/", "", $this->input->post('hpayahsiswa'));
            $idtelp = "SHA" . hash("sha256", strtolower($idsiswa . $hpayahsiswa));
            $idtelp1 = "SHI" . hash("sha256", strtolower($idsiswa . $hpayahsiswa));
            if ($this->db->get_where("siswanohpayah", ["id" => $idtelp])->num_rows()) {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data["error"] = '<label style="background-color: red">MAAF DATA SUDAH ADA SEBELUMNYA</label>';
                $this->load->view('edit_siswa/hpayah', $data);
            } elseif ($this->db->get_where("siswanohpibu", ["id" => $idtelp1])->num_rows()) {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data["error"] = '<label style="background-color: red">NOMOR SUDAH DIMASUKKAN KEDALAM NO HP IBU</label>';
                $this->load->view('edit_siswa/hpayah', $data);
            } elseif (is_null($hpayahsiswa) || $hpayahsiswa === "") {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data["error"] = '<label style="background-color: red">Kalau ingin menambahkan nomor HP Ayah, kolom nomor HP Ayah wajib diisi atau tekan tombol selanjutnya apabila tidak akan mengisikan nomor HP Ayah lagi</label>';
                $this->load->view('edit_siswa/hpayah', $data);
            } else {
                $this->db->insert("siswanohpayah", ["fkid" => $idsiswa,
                    "nomor" => (is_null($hpayahsiswa) || $hpayahsiswa === "") ? NULL : $hpayahsiswa
                ]);
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['nohpayah'] = $this->db->get_where("siswanohpayah", ["fkid" => $idsiswa])->result();
                $this->load->view('edit_siswa/hpayah', $data);
            }
        } elseif (isset($_POST['deletehpayahsiswa'])) {
            $key = $this->input->post('id');
            $this->db->delete("siswanohpayah", ["id" => $key]);

            $id = $this->input->post("idsiswa");
            $namalengkap = $this->db->get_where('siswadatainduk', ['id'=>$id])->result()[0]->namalengkap;
            $data['nohpayah'] = $this->db->get_where("siswanohpayah", ["fkid" => $id])->result();
            $data['idsiswa'] = $id;
            $data['namasiswa'] = $namalengkap;
            $this->load->view('edit_siswa/hpayah', $data);
        } elseif (isset($_POST['selanjutnyahpayahsiswa'])) {
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $data['namasiswa'] = $namasiswa;
            $data['idsiswa'] = $idsiswa;
            $data['nohpibu'] = $this->db->get_where("siswanohpibu", ["fkid" => $idsiswa])->result();
            $this->load->view('edit_siswa/hpibu', $data);
        } elseif (isset($_POST['deletehpibusiswa'])) {
            $key = $this->input->post('id');
            $this->db->delete("siswanohpibu", ["id" => $key]);

            $id = $this->input->post("idsiswa");
            $namalengkap = $this->db->get_where('siswadatainduk', ['id'=>$id])->result()[0]->namalengkap;
            $data['nohpibu'] = $this->db->get_where("siswanohpibu", ["fkid" => $id])->result();
            $data['idsiswa'] = $id;
            $data['namasiswa'] = $namalengkap;
            $this->load->view('edit_siswa/hpibu', $data);
        } elseif (isset($_POST['submithpibusiswa'])) {
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $hpibusiswa = preg_replace("/[^0-9]/", "", $this->input->post('hpibusiswa'));
            $idtelp = "SHI" . hash("sha256", strtolower($idsiswa . $hpibusiswa));
            $idtelp1 = "SHA" . hash("sha256", strtolower($idsiswa . $hpibusiswa));
            if ($this->db->get_where("siswanohpibu", ["id" => $idtelp])->num_rows()) {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['nohpibu'] = $this->db->get_where("siswanohpibu", ["fkid" => $idsiswa])->result();
                $data["error"] = '<label style="background-color: red">MAAF DATA SUDAH ADA SEBELUMNYA</label>';
                $this->load->view('edit_siswa/hpibu', $data);
            } elseif ($this->db->get_where("siswanohpayah", ["id" => $idtelp1])->num_rows()) {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['nohpibu'] = $this->db->get_where("siswanohpibu", ["fkid" => $idsiswa])->result();
                $data["error"] = '<label style="background-color: red">NOMOR SUDAH ADA DI HP AYAH</label>';
                $this->load->view('edit_siswa/hpibu', $data);
            } elseif (is_null($hpibusiswa) || $hpibusiswa === "") {
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['nohpibu'] = $this->db->get_where("siswanohpibu", ["fkid" => $idsiswa])->result();
                $data["error"] = '<label style="background-color: red">Kalau ingin menambahkan nomor hp Ibu, kolom nomor HP Ibu wajib diisi atau tekan tombol selanjutnya apabila tidak akan mengisikan nomor HP Ibu lagi</label>';
                $this->load->view('edit_siswa/hpibu', $data);
            } else {
                $this->db->insert("siswanohpibu", ["fkid" => $idsiswa,
                    "nomor" => (is_null($hpibusiswa) || $hpibusiswa === "") ? NULL : $hpibusiswa
                ]);
                $data['namasiswa'] = $namasiswa;
                $data['idsiswa'] = $idsiswa;
                $data['nohpibu'] = $this->db->get_where("siswanohpibu", ["fkid" => $idsiswa])->result();
                $this->load->view('edit_siswa/hpibu', $data);
            }
        } elseif (isset($_POST['selanjutnyahpibusiswa'])) {
            $idsiswa = $this->input->post('idsiswa');
            $namasiswa = $this->input->post('namasiswa');
            $sql = "SELECT id, namalengkap, namapanggilan, 
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
                        CONCAT(DATE_FORMAT(tanggallahirayah, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahirayah, '%M')),' ',DATE_FORMAT(tanggallahirayah, '%Y')) AS tanggallahirayah,
                        pekerjaanayah, 
                        (SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanayah) AS kategoripekerjaanayah, 
                        (SELECT uraian FROM pendidikan WHERE id=pendidikanayah) AS pendidikanayah,
                        (SELECT uraian FROM penghasilan WHERE id=penghasilanayah) AS penghasilanayah,
                        namaibu,
                        tempatlahiribu, 
                        CONCAT(DATE_FORMAT(tanggallahiribu, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahiribu, '%M')),' ',DATE_FORMAT(tanggallahiribu, '%Y')) AS tanggallahiribu,
                        pekerjaanibu,  
                        (SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanibu) AS kategoripekerjaanibu, 
                        (SELECT uraian FROM pendidikan WHERE id=pendidikanibu) AS pendidikanibu,
                        (SELECT uraian FROM penghasilan WHERE id=penghasilanibu) AS penghasilanibu, 
                        namawali,tempatlahirwali, 
                        CONCAT(DATE_FORMAT(tanggallahirwali, '%d'),' ',(SELECT ind FROM dictkalender WHERE eng=DATE_FORMAT(tanggallahirwali, '%M')),' ',DATE_FORMAT(tanggallahirwali, '%Y')) AS tanggallahirwali,
                        pekerjaanwali,
                        (SELECT uraian FROM kategoripekerjaan WHERE id=kategoripekerjaanwali) AS kategoripekerjaanwali, 
                        (SELECT uraian FROM pendidikan WHERE id=pendidikanwali) AS pendidikanwali, 
                        (SELECT uraian FROM penghasilan WHERE id=penghasilanwali) AS penghasilanwali, 
                        (SELECT GROUP_CONCAT(
                           CONCAT(
                              notelp,IF(ext IS NULL,'',CONCAT(' (ext: ',ext,')'))
                           ) SEPARATOR ', '
                        ) FROM siswanotelp WHERE siswanotelp.fkid=siswadatainduk.id) AS notelp,
                        (SELECT GROUP_CONCAT(nomor SEPARATOR ', ') FROM siswanohpayah WHERE fkid=siswadatainduk.id) AS nohpayah,
                        (SELECT GROUP_CONCAT(nomor SEPARATOR ', ') FROM siswanohpibu WHERE fkid=siswadatainduk.id) AS nohpibu,
                        dateinput
                        FROM siswadatainduk WHERE id='" . $idsiswa . "'";
            $data['namasiswa'] = $namasiswa;
            $data['idsiswa'] = $idsiswa;
            $data['querysiswa'] = $this->db->query($sql)->result();
            $this->load->view('edit_siswa/complete', $data);
        } else {
            redirect('dashboard');
        }
    }

    public function ajaxkabupaten() {
        if ($this->input->is_ajax_request()) {
            $kabupaten = '<option value="0">-- Pilih Kabupaten --</option>';
            $id = $this->input->post("id");
            $kab = $this->db->order_by("nama", "ASC")->get_where("kabupaten", ["id_prov" => $id])->result();
            foreach ($kab as $data) {
                $kabupaten.= '<option value="' . $data->id . '">' . $data->nama . '</option>';
            }
            echo $kabupaten;
            return $kabupaten;
        } else {
            redirect("/");
        }
    }

    public function ajaxkecamatan() {
        if ($this->input->is_ajax_request()) {
            $kecamatan = '<option value="0">-- Pilih Kecamatan --</option>';
            $id = $this->input->post("id");
            $kec = $this->db->order_by("nama", "ASC")->get_where("kecamatan", ["id_kabupaten" => $id])->result();
            foreach ($kec as $data) {
                $kecamatan.= '<option value="' . $data->id . '">' . $data->nama . '</option>';
            }
            echo $kecamatan;
            return $kecamatan;
        } else {
            redirect("/");
        }
    }

}
