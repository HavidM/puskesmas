<?php

namespace App\Controllers;

use App\Models\Informasi_model;
use App\Models\User_login_model;
use App\Models\Aboutus_model;
use App\Models\Antrian_model;
use App\Models\Poli_model;
use App\Models\Custom_model;
use App\Models\Biodata_model;

class Puskesmas extends BaseController
{
 	public function index()
	{

       if (session()->get('NIK') == '') {
			// session()->setFlashdata('gagal', 'Anda belum login');
			echo view('puskesmas_home_before_login_view');
		 }else{
         echo view('puskesmas_home_after_login_view');
       }
	}

    public function login()
	 {
		return view('puskesmas_login_form');
    }

    public function login_action() 
    {
      $login_model = new User_login_model();

      $nik = $this->request->getPost('nik');
      $password = $this->request->getPost('password');

      if (($nik == "") && ($password) == "")
      {
        return redirect()->to(base_url('puskesmas/login'));
      }

      $cek = $login_model->get_data($nik, $password);

      if (($cek['NIK'] == $nik) && ($cek['PASSWORD'] == $password))
      {
         session()->set('NIK', $cek['NIK']);
         session()->set('PASSWORD', $cek['PASSWORD']);
         return redirect()->to(base_url('puskesmas'));
      } else {
         session()->setFlashdata('gagal', 'NIK / Password salah');
         return redirect()->to(base_url('puskesmas/login'));
      }
   }

   public function informasi() 
   {
      if (session()->get('NIK') == '') {
			session()->setFlashdata('Silahkan login terlebih dahulu', 'Anda belum login');
			echo view('puskesmas_login_form');
		 }else{
         $model = new Informasi_model;
         $data['getInformasi'] = $model->getInformasi();
         echo view('puskesmas_informasi_view', $data);
       }
   }

   public function informasibeforelogin()
   {
        $model = new  Informasi_model;
        $data['getInformasi'] = $model->getInformasi();
        echo view('puskesmas_informasi_before_login_view', $data);
   }

   public function aboutus() 
   {
         $model = new Aboutus_model;
         $data['getAboutus'] = $model->getAboutus();
         echo view('puskesmas_aboutus_view', $data);
   }

   public function aboutusbeforelogin() 
   {
         $model = new Aboutus_model;
         $data['getAboutus'] = $model->getAboutus();
         echo view('puskesmas_aboutusbefore_login_view', $data);
   }

   public function antrian()
   {
      
      if (session()->get('NIK') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('puskesmas/login'));
		 }
		 else {
            $poli = $this->request->getPost('ddpoli');
            // print_r($poli);
        
            // $pager = \Config\Services::pager();
            $model = new Custom_model;
            $modelpoli = new Poli_model;
            $data['dd_poli'] = $modelpoli->getPoli();
            $data['title'] = 'Daftar Antrian';
            $data['getAntrianByPoli'] = $model->getAntrianByPoli($poli);
            echo view('puskesmas_antrian_view', $data);
         }
   }

   public function riwayatberobat()
   {
      
      if (session()->get('NIK') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('puskesmas/login'));
		 }
		 else {
            $nik = session()->get('NIK');
            // print_r($nik);

            $model = new Custom_model;
            $data['title'] = 'Riwayat Berobat';
            $data['getRiwayatBerobat'] = $model->getRiwayatBerobat($nik);
            echo view('puskesmas_riwayatberobat_view', $data);
         }
   }

   public function adddaftarberobat()
    {
        $modelpoli = new Poli_model;
        $data['title'] = 'Tambah Daftar Berobat';
        $data['dd_poli'] = $modelpoli->getPoli();
        echo view('puskesmas_daftarberobat_view', $data);
    }

   public function konfirmasiftarberobat()
   {
      if (session()->get('NIK') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('puskesmas/login'));
		 }
		 else {
            
            $nik = session()->get('NIK');
            $poli = $this->request->getPost('ddpoli');
            // print_r($nik);
            $model = new Custom_model;
            
            $getnama = $model->getNama($nik);
            $nama = $getnama[0]->NAMA;

            
            $data['poli'] = $poli;
            $data['title'] = 'Daftar Berobat';
            $data['getNamaPasien'] = $nama;            
            print_r($data['getNama']);
            echo view('puskesmas_konfirmasidaftarberobat_view', $data);
         }
   }
   public function finishdaftarberobat()
   {
      $tgl = date('y-m-d');
      $nik = session()->get('NIK');
      $nama = $this->request->getPost('nama');
      $poli = $this->request->getPost('poli');
      $modelantrian = new Antrian_model;
      $modelcustom = new Custom_model;
      $noantrian = $modelcustom->getNoAntrian($poli);
      $noantribgt = $noantrian[0]->NO_ANTRIAN;
      $noantribgt = $noantribgt +1;
      $data1['getNoAntrian'] = $noantribgt;
      $data1['getNama'] = $nama;
      $data1['getPoli'] = $poli;

      $data = array(
         // 'NIK' => $this->request->getPost('') . $this->request->getPost('nik'),
         'NAMA' => $nama,
         'POLI' => $poli,
         'STATUS' => 'Belum',
         'NO_ANTRIAN' => $noantribgt,
         'TANGGAL' => $tgl
     );
     $modelantrian->saveAntrian($data);

     echo view('puskesmas_daftarfinish_view', $data1);
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('puskesmas'));
   }

   public function biodata()
   {
       $nik = session()->get('NIK');
       $model = new Custom_model;
       $getbiodata = $model->getBiodata($nik);
       $getjeniskelamin = $model->getKelamin();
       $ID = $getbiodata[0]->ID;
       $nama = $getbiodata[0]->NAMA;
       $password = $getbiodata[0]->PASSWORD;
       $jeniskelamin = $getbiodata[0]->JENIS_KELAMIN;
       if ($jeniskelamin == 'L'){
         $jeniskelamin = 'Laki-laki';
       }else if ($jeniskelamin == 'P'){
         $jeniskelamin = 'Perempuan';
       }
       $alamat = $getbiodata[0]->ALAMAT;
       $tgllahir = $getbiodata[0]->TANGGAL_LAHIR;
       $data['title'] = 'Biodata';
       $data['ID'] = $ID;
       $data['nama'] = $nama;
       $data['password'] = $password;
       $data['jeniskelamin'] = $jeniskelamin;
       $data['alamat'] = $alamat;
       $data['tgllahir'] = $tgllahir;
       $data['getjeniskelamin'] = $getjeniskelamin;
       echo view('puskesmas_biodata_view', $data);
   }

   public function updatebiodata()
    {
        $model = new Biodata_model;
        $id = $this->request->getPost('id');
        $kelamin = $this->request->getPost('kelamin');
        if ($kelamin == 'Laki-laki'){
            $kelamin = 'L';
        }else{
            $kelamin = 'P';
        }
        print_r($kelamin);
        print_r($jkel);
        $data = array(
            'NIK' => $this->request->getPost('nik'),
            'NAMA' => $this->request->getPost('nama'),
            'PASSWORD' => $this->request->getPost('password'),
            'JENIS_KELAMIN' => $kelamin,
            'ALAMAT'  => $this->request->getPost('alamat'),
            'TANGGAL_LAHIR'  => $this->request->getPost('tanggal_lahir')
        );
        $model->editBiodata($data,$id);
        echo '<script>
                alert("Sukses Update Biodata");
                window.location="'.base_url('puskesmas/biodata').'"
            </script>';

    }
    
    public function daftar()
    {
        $data['title']     = 'Tambah Daftar Pasien';
        echo view('puskesmas_header_view', $data);
        echo view('puskesmas_daftar_view', $data);
        echo view('footer_view', $data);
    }

    public function daftarbaru()
    {
        $nik = $this->request->getPost('nik');
        // print_r($nik);
        $model = new Biodata_model;
        $modelcustom = new Custom_model;
        $getdatanik = $modelcustom->getBiodata($nik);
        $getNIK = $getdatanik[0]->NIK;
        if ($getNIK != '' ){
          echo '<script>
                alert("NIK sudah terdaftar");
                window.location="'.base_url('puskesmas/login').'"
            </script>';
        }else{
          $data = array(
            // 'NIK' => $this->request->getPost('') . $this->request->getPost('nik'),
            'NIK' => $this->request->getPost('nik'),
            'NAMA'         => $this->request->getPost('nama'),
            'PASSWORD'         => $this->request->getPost('password'),
            'jenis_kelamin'  => $this->request->getPost('jeniskelamin'),
            'alamat'  => $this->request->getPost('alamat'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir')
        );
        $model->saveBiodata($data);
        echo '<script>
                alert("Sukses Tambah Daftar Pasien");
                window.location="'.base_url('puskesmas/login').'"
            </script>';
        }        
    }
}


