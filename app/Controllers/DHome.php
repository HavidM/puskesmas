<?php

namespace App\Controllers;

class DHome extends BaseController
{
	public function index()
	{

		if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Dokter'));
		 }
		 else {
			$data['title']  = 'Home';
			echo view('dokter_header_view', $data);
			echo view('dokter_home_view', $data);
			echo view('footer_view', $data);
		 }
		
	}
}


