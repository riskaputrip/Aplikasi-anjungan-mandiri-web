<?php

namespace App\Controllers;
use Dompdf\Dompdf;

class ConsoleBox extends BaseController
{
    public function index()
    {
        return view('page/console_box/console_box');
    }

    public function peserta_bpjs()
    {
        return view('page/console_box/peserta_bpjs');
    }

    public function peserta_nonbpjs()
    {
        return view('page/console_box/peserta_nonbpjs');
    }

    public function form_bpjs()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('peserta_bpjs');

        $data = [
            'query' => $builder->getWhere(['no_bpjs' => $this->request->getPost('no_bpjs')])->getResultArray(),
            'poli' => $this->request->getPost('poli')
        ];

        return view('/page/console_box/data_diri', $data);
    }

    public function form_nonbpjs()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('pasien');

        $data = [
            'query' => $builder->getWhere(['nik' => $this->request->getPost('no_nik')])->getResultArray(),
            'poli' => $this->request->getPost('poli')
        ];

        return view('/page/console_box/data_diri_nonbpjs', $data);
    }

    public function nomor_antrian($id, $poli)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');

        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $data = [
            'jumlah_antrian' => $builder->where(['tanggal' => $currentDate, 'poli' => $poli])->countAllResults(),
            'poli' => $poli,
        ];

        return view('/page/console_box/nomor_antrian', $data);
    }

    public function ambil_antrian()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_antrian');
        $currentDate = gmdate("Y-m-d", time() + 60 * 60 * 7);
        $id = $this->input->get('id');
        dd($id);
        
        $data = [
            'tanggal' => $currentDate,
            'no_antrian' => $this->request->getPost('antrian'),
            'poli' => $this->request->getPost('poli')
        ];
        $builder->insert($data);
    
        
        return redirect()->to('ConsoleBox/cetak', $data); 
        
    }

    public function cetak(){

        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tbl_antrian');
        $row   = $query->getRow();
        
        $html = view('page/console_box/cetak', $data);

        $filename = date('y-m-d-H-i-s'). '-nomor antrian';

        // instantiate and use the dompdf class
        $dompdf = new \Dompdf\Dompdf();

        // load HTML content
        $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // // output the generated pdf
        $dompdf->stream($filename);

    }

}
