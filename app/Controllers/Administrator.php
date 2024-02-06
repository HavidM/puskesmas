<?php namespace App\Controllers;

use App\Models\Login_model;

class Administrator extends BaseController
{
	public function index()
	{
		return view('login_form');
   }
   
   public function login_action() 
   {
      $login_model = new Login_model();

      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');

      $cek = $login_model->get_data($username, $password);

      if (($cek['username'] == $username) && ($cek['password'] == $password))
      {
         session()->set('USERNAME', $cek['username']);
         session()->set('PASSWORD', $cek['password']);
         return redirect()->to(base_url('home'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('Administrator'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('Administrator'));
   }

	//--------------------------------------------------------------------

}