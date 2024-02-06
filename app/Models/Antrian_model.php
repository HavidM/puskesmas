<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Antrian_model extends Model 
{
    protected $table = 'antrian';
     
    public function getAntrian($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ID' => $id]);
        }   
    } 

    public function saveAntrian($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editAntrian($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }

    public function editRekdis($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }

    public function hapusAntrian($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['ID' => $id]);
    }
}