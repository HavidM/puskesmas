<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Biodata_model extends Model
{
    protected $table = 'biodata';
     
    public function getBiodata($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ID' => $id]);
        }   
    }

    public function saveBiodata($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editBiodata($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }

    public function hapusBiodata($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['ID' => $id]);
    }
 
}