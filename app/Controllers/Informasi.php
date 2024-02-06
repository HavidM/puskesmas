<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Informasi_model;

class Informasi extends Controller
{
    public function index()
    {
        if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Administrator'));
		 }
		 else {
            $model = new Informasi_model;
            $data['title']     = 'Informasi Terkini';
            $data['getInformasi'] = $model->getInformasi();
            echo view('header_view', $data);
            echo view('informasi_view', $data);
            echo view('footer_view', $data);
         }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Informasi';
        echo view('header_view', $data);
        echo view('tambah_informasi_view', $data);
        echo view('footer_view', $data);
    }

    public function edit($id)
    {
        $model = new Informasi_model;
        $getInformasi = $model->getInformasi($id)->getRow();
        if(isset($getInformasi))
        {
            $data['informasi'] = $getInformasi;
            $data['title']  = 'Edit '.$getInformasi->id;

            echo view('header_view', $data);
            echo view('edit_informasi_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Informasi '.$id.' Tidak ditemukan");
                    window.location="'.base_url('informasi').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Informasi_model;
        $id = $this->request->getPost('id');
        $data = array(
            'JUDUL' => $this->request->getPost('judul'),
            'ISI' => $this->request->getPost('isi')
        );
        $model->editInformasi($data,$id);
        echo '<script>
                alert("Sukses Edit Informasi");
                window.location="'.base_url('informasi').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Informasi_model;
        $getInformasi= $model->getInformasi($id)->getRow();
        if(isset($getInformasi))
        {
            $model->hapusInformasi($id);
            echo '<script>
                    alert("Hapus Informasi Sukses");
                    window.location="'.base_url('informasi').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID poli '.$id.' Tidak ditemukan");
                    window.location="'.base_url('informasi').'"
                </script>';
        }
    }
}