<?php

namespace App\Controllers;

class PetugasPanggil extends BaseController
{
    public function index()
    {
        return view('page/petugas_panggil/petugas_panggil');
    }

    public function antrian_poli_umum()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'POLI UMUM', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'POLI UMUM', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'POLI UMUM', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'POLI UMUM')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'POLI UMUM', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_poli_umum', $data);
    }

    public function antrian_poli_gigi_mulut()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'POLI GIGI & MULUT', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'POLI GIGI & MULUT', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'POLI GIGI & MULUT', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'POLI GIGI & MULUT')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'POLI GIGI & MULUT', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_poli_gigi_mulut', $data);
    }


    public function antrian_poli_kia()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'POLI KIA', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'POLI KIA', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'POLI KIA', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'POLI KIA')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'POLI KIA', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_poli_kia', $data);
    }

    public function antrian_laboratorium()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'LABORATORIUM', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'LABORATORIUM', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'LABORATORIUM', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'LABORATORIUM')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'LABORATORIUM', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_laboratorium', $data);
    }

    public function antrian_poli_kb()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'POLI KB', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'POLI KB', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'POLI KB', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'POLI KB')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'POLI KB', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_poli_kb', $data);
    }

    public function antrian_poli_refraksi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'POLI REFRAKSI', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'POLI REFRAKSI', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'POLI REFRAKSI', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'POLI REFRAKSI')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'POLI REFRAKSI', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_poli_refraksi', $data);
    }

    public function antrian_poli_persalinan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'query_antrian' => $builder->getWhere(['poli' => 'POLI PERSALINAN', 'tanggal' => $currentDate])->getResultArray(),
            'jumlah_antrian' => $builder->where(['poli' => 'POLI PERSALINAN', 'tanggal' => $currentDate])->countAllResults(),
            'antrian_sekarang' => $builder->where(['poli' => 'POLI PERSALINAN', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray(),
            'antrian_selanjutnya' => $builder->where('poli', 'POLI PERSALINAN')->where('tanggal', $currentDate)->where('status', '0')->orderBy('id', 'ASC')->get()->getRowArray(),
            'sisa_antrian' => $builder->where(['poli' => 'POLI PERSALINAN', 'tanggal' => $currentDate, 'status' => '0'])->countAllResults()
        ];

        // print_r($data['antrian_selanjutnya']);

        if ($this->request->isAJAX()) {
            return json_encode($data['query_antrian']);
        }

        return view('/page/petugas_panggil/antrian_poli_persalinan', $data);
    }


    public function update_antrian()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $updated_date = gmdate("Y-m-d H:i:s", time() + 60 * 60 * 7);

        $data = [
            'status' => "1",
            'updated_date' => $updated_date
        ];

        $builder->where('id', $this->request->getPost('id'))->where('poli', $this->request->getPost('poli'));
        $builder->update($data);
    }
}
