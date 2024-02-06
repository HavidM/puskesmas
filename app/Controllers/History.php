<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Antrian_model;
use App\Models\Custom_model;
use App\Models\Poli_model;
use App\Models\Biodata_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class History extends Controller
{
    public function index()
    {
        if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Administrator'));
		 }
		 else {
            $pager = \Config\Services::pager();
            $model = new Antrian_model;
            $data['title']     = 'History Pasien';
            $data['getAntrian'] = $model->paginate(5, 'getAntrian');
            $data['pager'] = $model->pager;
            // $data['page'] = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
            // $data['page'] = $data->pager;
            echo view('header_view', $data);
            echo view('History_view', $data);
            echo view('footer_view', $data);
         }
    }

    public function tambah()
    {
        $modelpoli = new Poli_model;
        $modeldaftarpasien = new Biodata_model;
        $data['title'] = 'Tambah Daftar Antrian';
        $data['dd_poli'] = $modelpoli->getPoli();
        $data['dd_daftarpasien'] = $modeldaftarpasien->getBiodata();
        echo view('header_view', $data);
        echo view('tambah_antrian_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $poli = $this->request->getPost('polilist');
        $model = new Antrian_model;
        $modelcustom = new Custom_model;
        $noantrian = $modelcustom->getNoAntrian($poli);
        $noantribgt = $noantrian[0]->NO_ANTRIAN;
        // print_r($noantribgt);

        $noantribgt = $noantribgt +1;
      
        $tgl = date('y-m-d');
            
            $data = array(
                // 'NIK' => $this->request->getPost('') . $this->request->getPost('nik'),
                'NAMA' => $this->request->getPost('niklist'),
                'POLI' => $this->request->getPost('polilist'),
                'STATUS' => 'Belum',
                'NO_ANTRIAN' => $noantribgt,
                'TANGGAL' => $tgl
            );
            $model->saveAntrian($data);
            echo '<script>
                    alert("Sukses Tambah Daftar Antrian");
                    window.location="'.base_url('antrian').'"
                </script>';
    }

    public function edit($id)
    {
        $model = new Antrian_model;
        $getAntrian = $model->getAntrian($id)->getRow();
        if(isset($getAntrian))
        {
            $data['antrian'] = $getAntrian;
            $data['title']  = 'Edit '.$getAntrian->id;

            echo view('header_view', $data);
            echo view('edit_antrian_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Antrian '.$id.' Tidak ditemukan");
                    window.location="'.base_url('antrian').'"
                </script>';
        }
    }

    public function update($id)
    {
        $model = new Antrian_model;

        $data = array(
            'STATUS' => 'Sudah'
        );

        $getAntrian = $model->getAntrian($id)->getRow();
        if(isset($getAntrian))
        {
            $model->editAntrian($data,$id);

            echo '<script>
                alert("Sukses Edit Daftar Antrian");
                window.location="'.base_url('antrian').'"
            </script>';
        }else{
            echo '<script>
                    alert("Update Gagal !, ID Antrian '.$id.' Tidak ditemukan");
                    window.location="'.base_url('antrian').'"
                </script>';
        }
    }

    public function export()
    {
      

        $model = new Custom_model;
        $data = $model->exportantrianbydate();

        $spreadsheet = new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NAMA')
            ->setCellValue('B1', 'POLI')
            ->setCellValue('C1', 'STATUS')
            ->setCellValue('D1', 'NO ANTRIAN')
            ->setCellValue('E1', 'TANGGAL');

        $column = 2;
        $loop = 0;
        foreach ($data as $antrian) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data[$loop]->NAMA)
                ->setCellValue('B' . $column, $data[$loop]->POLI)
                ->setCellValue('C' . $column, $data[$loop]->STATUS)
                ->setCellValue('D' . $column, $data[$loop]->NO_ANTRIAN)
                ->setCellValue('E' . $column, $data[$loop]->TANGGAL);

            $column++;
            $loop++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Data-DaftarAntrian';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}