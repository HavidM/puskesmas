<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Poli_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DPoli extends Controller
{
    public function index()
    {
        if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Dokter'));
		 }else{
            $model = new Poli_model;
            $data['title']     = 'Poli';
            $data['getPoli'] = $model->paginate(5, 'getPoli');
            $data['pager'] = $model->pager;
            echo view('dokter_header_view', $data);
            echo view('dokter_poli_view', $data);
            echo view('footer_view', $data);
         }
        
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Poli';
        echo view('dokter_header_view', $data);
        echo view('tambah_poli_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Poli_model;
        $data = array(
            'NAMA' => $this->request->getPost('nama')
        );
        $model->savePoli($data);
        echo '<script>
                alert("Sukses Tambah Poli");
                window.location="'.base_url('poli').'"
            </script>';
    }

    public function edit($id)
    {
        $model = new Poli_model;
        $getPoli = $model->getPoli($id)->getRow();
        if(isset($getPoli))
        {
            $data['poli'] = $getPoli;
            $data['title']  = 'Edit '.$getPoli->id;
            echo view('dokter_header_view', $data);
            echo view('edit_poli_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Poli '.$id.' Tidak ditemukan");
                    window.location="'.base_url('poli').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Poli_model;
        $id = $this->request->getPost('id');
        $data = array(
            'NAMA' => $this->request->getPost('nama')
        );
        $model->editPoli($data,$id);
        echo '<script>
                alert("Sukses Edit Poli");
                window.location="'.base_url('poli').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Poli_model;
        $getPoli= $model->getPoli($id)->getRow();
        if(isset($getPoli))
        {
            $model->hapusPoli($id);
            echo '<script>
                    alert("Hapus Poli Sukses");
                    window.location="'.base_url('poli').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID poli '.$id.' Tidak ditemukan");
                    window.location="'.base_url('poli').'"
                </script>';
        }
    }

    public function export()
    {
		$model = new Poli_model;
        $data = $model->getPoli();

        $spreadsheet = new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NAMA');

        $column = 2;

        foreach ($data as $poli) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $poli['NAMA']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Data-DaftarPoli';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}