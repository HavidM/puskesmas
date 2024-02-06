<?php namespace App\Models;
use CodeIgniter\Model;

class Dokter_login_model extends Model
{
	public function get_data($username, $password)
	{
      return $this->db->table('dokter')
      ->where(array('username' => $username, 'password' => $password))
      ->get()->getRowArray();
	}

	//--------------------------------------------------------------------

}