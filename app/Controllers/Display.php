<?php

namespace App\Controllers;

class Display extends BaseController
{
    public function index()
    {
        return view('page/display/display');
    }

    public function display_poli_umum()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'POLI UMUM', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_poli_umum', $data);
    }

    public function display_poli_gigi_mulut()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'POLI GIGI & MULUT', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_poli_gigi_mulut', $data);
    }

    public function display_poli_kia()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'POLI KIA', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_poli_kia', $data);
    }

    public function display_laboratorium()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'LABORATORIUM', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_laboratorium', $data);
    }

    public function display_poli_kb()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'POLI KB', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_poli_kb', $data);
    }

    public function display_poli_refraksi()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'POLI REFRAKSI', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_poli_refraksi', $data);
    }

    public function display_poli_persalinan()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'antrian_sekarang' => $builder->where(['poli' => 'POLI PERSALINAN', 'tanggal' => $currentDate, 'status' => "1"])->orderBy('updated_date', 'DESC')->get()->getRowArray()
        ];

        return view('page/display/display_poli_persalinan', $data);
    }
}
