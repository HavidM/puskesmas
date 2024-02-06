<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		if (session()->get('USERNAME') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('Administrator'));
		 }
		 else {
			$data['title']  = 'Home';
			echo view('header_view', $data);
			echo view('home_view', $data);
			echo view('footer_view', $data);
		 }
		
	}
}


