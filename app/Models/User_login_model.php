<?php namespace App\Models;
use CodeIgniter\Model;

class User_login_model extends Model
{
	public function get_data($nik, $password)
	{
      return $this->db->table('biodata')
      ->where(array('NIK' => $nik, 'PASSWORD' => $password))
      ->get()->getRowArray();
	}
}