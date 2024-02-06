<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Biodata_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DBiodata extends Controller
{
    public function index()
    {
        if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Dokter'));
		 }
		 else {
            $model = new Biodata_model;
            $data['title']     = 'Daftar Pasien';
            $data['getBiodata'] = $model->paginate(5, 'getBiodata');
            $data['pager'] = $model->pager;
            echo view('dokter_header_view', $data);
            echo view('dokter_biodata_view', $data);
            echo view('footer_view', $data);
         }
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Daftar Pasien';
        echo view('dokter_header_view', $data);
        echo view('tambah_biodata_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Biodata_model;
        $data = array(
            // 'NIK' => $this->request->getPost('') . $this->request->getPost('nik'),
            'NIK' => $this->request->getPost('nik'),
            'NAMA'         => $this->request->getPost('nama'),
            'jenis_kelamin'  => $this->request->getPost('jeniskelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir')
        );
        $model->saveBiodata($data);
        echo '<script>
                alert("Sukses Tambah Daftar Pasien");
                window.location="'.base_url('DBiodata').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Biodata_model;
        $getBiodata = $model->getBiodata($id)->getRow();
        if(isset($getBiodata))
        {
            $data['biodata'] = $getBiodata;
            $data['title']  = 'Edit '.$getBiodata->id;

            echo view('dokter_header_view', $data);
            echo view('edit_biodata_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID pasien '.$id.' Tidak ditemukan");
                    window.location="'.base_url('DBiodata').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Biodata_model;
        $id = $this->request->getPost('id');
        $data = array(
            'NIK' => $this->request->getPost('nik'),
            'NAMA'         => $this->request->getPost('nama'),
            'JENIS_KELAMIN'         => $this->request->getPost('jeniskelamin'),
            'ALAMAT'  => $this->request->getPost('alamat'),
            'TANGGAL_LAHIR'  => $this->request->getPost('tanggal_lahir')
        );
        $model->editBiodata($data,$id);
        echo '<script>
                alert("Sukses Edit Daftar Pasien");
                window.location="'.base_url('DBiodata').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Biodata_model;
        $getBiodata = $model->getBiodata($id)->getRow();
        if(isset($getBiodata))
        {
            $model->hapusBiodata($id);
            echo '<script>
                    alert("Hapus Daftar Pasien Sukses");
                    window.location="'.base_url('DBiodata').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID pasien '.$id.' Tidak ditemukan");
                    window.location="'.base_url('DBiodata').'"
                </script>';
        }
    }

    public function export()
    {
		$model = new Biodata_model;
        $data = $model->getBiodata();

        $spreadsheet = new Spreadsheet();
        
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NIK')
            ->setCellValue('B1', 'NAMA')
            ->setCellValue('C1', 'JENIS_KELAMIN')
			->setCellValue('D1', 'ALAMAT')
			->setCellValue('E1', 'TANGGAL_LAHIR');

        $column = 2;

        foreach ($data as $biodata) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $biodata['NIK'])
                ->setCellValue('B' . $column, $biodata['NAMA'])
                ->setCellValue('C' . $column, $biodata['JENIS_KELAMIN'])
				->setCellValue('D' . $column, $biodata['ALAMAT'])
				->setCellValue('E' . $column, $biodata['TANGGAL_LAHIR']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Data-DaftarPasien';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}