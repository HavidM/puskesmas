<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Aboutus_model;

class Aboutus extends Controller
{
    public function index()
    {
        if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Administrator'));
		 }
		 else {
            $model = new Aboutus_model;
            $data['title']     = 'About Us';
            $data['getAboutus'] = $model->getAboutus();
            echo view('header_view', $data);
            echo view('aboutus_view', $data);
            echo view('footer_view', $data);
         }
    }

    public function edit($id)
    {
        $model = new Aboutus_model;
        $getAboutus = $model->getAboutus($id)->getRow();
        if(isset($getAboutus))
        {
            $data['aboutus'] = $getAboutus;
            $data['title']  = 'Edit '.$getAboutus->id;

            echo view('header_view', $data);
            echo view('edit_aboutus_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Informasi '.$id.' Tidak ditemukan");
                    window.location="'.base_url('aboutus').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Aboutus_model;
        $id = $this->request->getPost('id');
        $data = array(
            'JUDUL' => $this->request->getPost('judul'),
            'ISI' => $this->request->getPost('isi')
        );
        $model->editAboutus($data,$id);
        echo '<script>
                alert("Sukses Edit About us");
                window.location="'.base_url('aboutus').'"
            </script>';

    }
}