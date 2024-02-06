<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Informasi_model extends Model
{
    protected $table = 'informasi';
     
    public function getInformasi($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ID' => $id]);
        }   
    }    

    public function editInformasi($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }
}