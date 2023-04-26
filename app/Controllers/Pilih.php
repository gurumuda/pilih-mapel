<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pilihan;
use App\Models\Siswa;
use App\Models\Kelas;

class Pilih extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $dataKelas = new Kelas();
        $data['kelas'] = $dataKelas->findAll();

        $dataPilihan = new Pilihan();

        $data['fis1'] = $dataPilihan->where('pilihan', 'fis1')->countAllResults();
        $data['fis2'] = $dataPilihan->where('pilihan', 'fis2')->countAllResults();
        $data['bio1'] = $dataPilihan->where('pilihan', 'bio1')->countAllResults();
        $data['bio2'] = $dataPilihan->where('pilihan', 'bio2')->countAllResults();
        $data['bio3'] = $dataPilihan->where('pilihan', 'bio3')->countAllResults();
        $data['bio4'] = $dataPilihan->where('pilihan', 'bio4')->countAllResults();
        $data['bio5'] = $dataPilihan->where('pilihan', 'bio5')->countAllResults();
        $data['kim1'] = $dataPilihan->where('pilihan', 'kim1')->countAllResults();
        $data['kim2'] = $dataPilihan->where('pilihan', 'kim2')->countAllResults();
        $data['kim3'] = $dataPilihan->where('pilihan', 'kim3')->countAllResults();
        $data['mat1'] = $dataPilihan->where('pilihan', 'mat1')->countAllResults();
        $data['mat2'] = $dataPilihan->where('pilihan', 'mat2')->countAllResults();
        $data['mat3'] = $dataPilihan->where('pilihan', 'mat3')->countAllResults();
        $data['eko1'] = $dataPilihan->where('pilihan', 'eko1')->countAllResults();
        $data['eko2'] = $dataPilihan->where('pilihan', 'eko2')->countAllResults();
        $data['eko3'] = $dataPilihan->where('pilihan', 'eko3')->countAllResults();
        $data['sos1'] = $dataPilihan->where('pilihan', 'sos1')->countAllResults();
        $data['sos2'] = $dataPilihan->where('pilihan', 'sos2')->countAllResults();
        $data['sos3'] = $dataPilihan->where('pilihan', 'sos3')->countAllResults();
        $data['geo1'] = $dataPilihan->where('pilihan', 'geo1')->countAllResults();
        $data['geo2'] = $dataPilihan->where('pilihan', 'geo2')->countAllResults();
        $data['geo3'] = $dataPilihan->where('pilihan', 'geo3')->countAllResults();
        $data['geo4'] = $dataPilihan->where('pilihan', 'geo4')->countAllResults();
        $data['geo5'] = $dataPilihan->where('pilihan', 'geo5')->countAllResults();
        $data['tik1'] = $dataPilihan->where('pilihan', 'tik1')->countAllResults();
        $data['tik2'] = $dataPilihan->where('pilihan', 'tik2')->countAllResults();
        $data['tik3'] = $dataPilihan->where('pilihan', 'tik3')->countAllResults();
        $data['ba1'] = $dataPilihan->where('pilihan', 'ba1')->countAllResults();
        $data['ba2'] = $dataPilihan->where('pilihan', 'ba2')->countAllResults();

        $data['kuota_fis1'] = 100;
        $data['kuota_fis2'] = 100;
        $data['kuota_bio1'] = 100;
        $data['kuota_bio2'] = 100;
        $data['kuota_bio3'] = 100;
        $data['kuota_bio4'] = 100;
        $data['kuota_bio5'] = 100;
        $data['kuota_kim1'] = 100;
        $data['kuota_kim2'] = 100;
        $data['kuota_kim3'] = 100;
        $data['kuota_mat1'] = 100;
        $data['kuota_mat2'] = 100;
        $data['kuota_mat3'] = 100;
        $data['kuota_eko1'] = 100;
        $data['kuota_eko2'] = 100;
        $data['kuota_eko3'] = 100;
        $data['kuota_sos1'] = 100;
        $data['kuota_sos2'] = 100;
        $data['kuota_sos3'] = 100;
        $data['kuota_geo1'] = 100;
        $data['kuota_geo2'] = 100;
        $data['kuota_geo3'] = 100;
        $data['kuota_geo4'] = 100;
        $data['kuota_geo5'] = 100;
        $data['kuota_tik1'] = 100;
        $data['kuota_tik2'] = 100;
        $data['kuota_tik3'] = 100;
        $data['kuota_ba1'] = 100;
        $data['kuota_ba2'] = 100;



        return view('pilih', $data);
    }

    public function proses()
    {
        // echo '<pre>';
        // print_r($_POST);

        $kelas = $this->request->getVar('kelas');
        $nama = $this->request->getVar('nama');
        $karir = $this->request->getVar('karir');
        $fis1 = $this->request->getVar('fis1');
        $fis2 = $this->request->getVar('fis2');
        $bio1 = $this->request->getVar('bio1');
        $bio2 = $this->request->getVar('bio2');
        $bio3 = $this->request->getVar('bio3');
        $bio4 = $this->request->getVar('bio4');
        $bio5 = $this->request->getVar('bio5');
        $kim1 = $this->request->getVar('kim1');
        $kim2 = $this->request->getVar('kim2');
        $kim3 = $this->request->getVar('kim3');
        $mat1 = $this->request->getVar('mat1');
        $mat2 = $this->request->getVar('mat2');
        $mat3 = $this->request->getVar('mat3');
        $eko1 = $this->request->getVar('eko1');
        $eko2 = $this->request->getVar('eko2');
        $eko3 = $this->request->getVar('eko3');
        $sos1 = $this->request->getVar('sos1');
        $sos2 = $this->request->getVar('sos2');
        $sos3 = $this->request->getVar('sos3');
        $geo1 = $this->request->getVar('geo1');
        $geo2 = $this->request->getVar('geo2');
        $geo3 = $this->request->getVar('geo3');
        $geo4 = $this->request->getVar('geo4');
        $geo5 = $this->request->getVar('geo5');
        $tik1 = $this->request->getVar('tik1');
        $tik2 = $this->request->getVar('tik2');
        $tik3 = $this->request->getVar('tik3');
        $ba1 = $this->request->getVar('ba1');
        $ba2 = $this->request->getVar('ba2');

        $insert = [];

        if ($fis1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'fis1'
            ];
            array_push($insert, $data);
        }
        if ($fis2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'fis2'
            ];
            array_push($insert, $data);
        }
        if ($bio1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'bio1'
            ];
            array_push($insert, $data);
        }
        if ($bio2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'bio2'
            ];
            array_push($insert, $data);
        }
        if ($bio3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'bio3'
            ];
            array_push($insert, $data);
        }
        if ($bio4) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'bio4'
            ];
            array_push($insert, $data);
        }
        if ($bio5) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'bio5'
            ];
            array_push($insert, $data);
        }
        if ($kim1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'kim1'
            ];
            array_push($insert, $data);
        }
        if ($kim2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'kim2'
            ];
            array_push($insert, $data);
        }
        if ($kim3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'kim3'
            ];
            array_push($insert, $data);
        }
        if ($mat1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'mat1'
            ];
            array_push($insert, $data);
        }
        if ($mat2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'mat2'
            ];
            array_push($insert, $data);
        }
        if ($mat3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'mat3'
            ];
            array_push($insert, $data);
        }
        if ($eko1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'eko1'
            ];
            array_push($insert, $data);
        }
        if ($eko2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'eko2'
            ];
            array_push($insert, $data);
        }
        if ($eko3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'eko3'
            ];
            array_push($insert, $data);
        }
        if ($sos1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'sos1'
            ];
            array_push($insert, $data);
        }
        if ($sos2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'sos2'
            ];
            array_push($insert, $data);
        }
        if ($sos3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'sos3'
            ];
            array_push($insert, $data);
        }
        if ($geo1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'geo1'
            ];
            array_push($insert, $data);
        }
        if ($geo2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'geo2'
            ];
            array_push($insert, $data);
        }
        if ($geo3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'geo3'
            ];
            array_push($insert, $data);
        }
        if ($geo4) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'geo4'
            ];
            array_push($insert, $data);
        }
        if ($geo5) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'geo5'
            ];
            array_push($insert, $data);
        }
        if ($tik1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'tik1'
            ];
            array_push($insert, $data);
        }
        if ($tik2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'tik2'
            ];
            array_push($insert, $data);
        }
        if ($tik3) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'tik3'
            ];
            array_push($insert, $data);
        }
        if ($ba1) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'ba1'
            ];
            array_push($insert, $data);
        }
        if ($ba2) {
            $data = [
                'nama' => $nama,
                'kelas' => $kelas,
                'pilihan' => 'ba2'
            ];
            array_push($insert, $data);
        }

        // dd($insert);
        $dataPilihan = new Pilihan();
        $dataSiswa = new Siswa();
        $idSiswa = $dataSiswa->where(['nama' => $nama, 'kelas' => $kelas])->first()->id;

        $cek = $dataPilihan->where(['nama' => $nama, 'kelas' => $kelas])->first();

        if ($cek) {
            return redirect()->back();
        }

        $simpanPilihan = $dataPilihan->insertBatch($insert);

        if ($simpanPilihan) {
            $status = [
                'id' => $idSiswa,
                'karir' => $karir,
                'status' => '1'
            ];
            $dataSiswa->save($status);
        }
        return redirect()->back();
    }

    public function getSiswa()
    {
        $kodeKelas = $this->request->getVar('kelas');

        $dataSiswa = new Siswa();
        $siswa = $dataSiswa
            ->where('kelas', $kodeKelas)
            ->where('status', '0')
            ->findAll();

        $res = '<option val="">-- Pilih Peserta Didik -- </option>';
        foreach ($siswa as $key) {
            $res .= '<option val="' . $key->nama . '">' . $key->nama . '</option>';
        }

        echo $res;
    }

    public function pilihan()
    {
        $dataSiswa = new Siswa();
        $siswa = $dataSiswa
            ->orderBy('kelas', 'ASC')
            ->orderBy('nama', 'ASC')
            ->findAll();

        $dataPilihan = new Pilihan();

        $data = [];
        foreach ($siswa as $key) {

            $pilihan = $dataPilihan
                ->select('pilihan')
                ->where('nama', $key->nama)
                ->findAll();

            $data['siswa'][] = [
                'nama' => $key->nama,
                'kelas' => $key->kelas,
                'karir' => $key->karir,
                'pilihan' => $pilihan
            ];
        }

        return view('pilihan', $data);
    }

    public function hapus($nama, $kelas)
    {
        $dataPilihan = new Pilihan();
        $hapus = $dataPilihan->where(['nama' => $nama, 'kelas' => $kelas])->delete();

        $dataSiswa = new Siswa();
        $idSiswa = $dataSiswa->where(['nama' => $nama, 'kelas' => $kelas])->first()->id;

        if ($hapus) {
            $status = [
                'id' => $idSiswa,
                'karir' => '',
                'status' => '0'
            ];
            $dataSiswa->save($status);
        }

        return redirect()->back();
    }
}
