<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Poli_model extends Model
{
    protected $table = 'poli';
     
    public function getPoli($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ID' => $id]);
        }   
    }

    public function savePoli($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editPoli($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }

    public function hapusPoli($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['ID' => $id]);
    }

    public function getDaftarPoli(){
		$query = $this->db->query('SELECT * FROM poli');
        return $query->result();
	}
 
}