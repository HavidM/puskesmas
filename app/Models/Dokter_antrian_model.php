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

    public function hapusAntrian($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['ID' => $id]);
    }

    public function exportantrianbydate()
    {
            $mulai_tanggal = @$_POST['mulai_tanggal'];
            $sampai_tanggal = @$_POST['sampai_tanggal'];

            $builder = $this->db->table("antrian");
            $builder->select("*");
            $builder->orderBy('TANGGAL', 'DESC');
            $data = $builder->getWhere(['TANGGAL >=' => $mulai_tanggal, 'TANGGAL <=' => $sampai_tanggal])->getResult();
            return $data;

            // $builder->where('name !=', $name);
            // $builder->where('id <', $id);
    }
}