<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Aboutus_model extends Model
{
    protected $table = 'about_us';
     
    public function getAboutus($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['ID' => $id]);
        }   
    }    

    public function editAboutus($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('ID', $id);
        return $builder->update($data);
    }
}