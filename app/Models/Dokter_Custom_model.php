<?php 
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
 
class DCustom_model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
     
    public function getNoAntrian($poli)
    {
        $tgl = date('y-m-d');

        // $builder = $this->db->table("antrian");
        // $builder->select("NO_ANTRIAN");
        // $data = $builder->getWhere(['TANGGAL' => $tgl])->getResult();
        // return $data;

        $builder = $this->db->table("antrian");
        $builder->selectMax("NO_ANTRIAN");
        $data = $builder->getWhere(['TANGGAL' => $tgl, 'POLI' => $poli])->getResult();
        return $data;

        // if ($data->num_rows() == 0) {
        //     $max = $data->row()->NO_ANTRIAN;
        //     return $max == 1;
        // }else{
        //         $max = $data->row()->NO_ANTRIAN;
        //         return $max == $max + 1;
        //      }

    }   

    public function getAntrianByPoli($poli)
    {
        $tgl = date('y-m-d');

        // $builder = $this->db->table("antrian");
        // $builder->select("NO_ANTRIAN");
        // $data = $builder->getWhere(['TANGGAL' => $tgl])->getResult();
        // return $data;

        if($poli==''){
            $builder = $this->db->table("antrian");
            $builder->select("*");
            $builder->orderBy('NO_ANTRIAN', 'DESC');
            $data = $builder->getWhere(['TANGGAL' => $tgl])->getResult();
        }else{
            $builder = $this->db->table("antrian");
            $builder->select("*");
            $builder->orderBy('NO_ANTRIAN', 'DESC');
            $data = $builder->getWhere(['POLI' => $poli, 'TANGGAL' => $tgl])->getResult();
        }
            return $data;
        // if ($data->num_rows() == 0) {
        //     $max = $data->row()->NO_ANTRIAN;
        //     return $max == 1;
        // }else{
        //         $max = $data->row()->NO_ANTRIAN;
        //         return $max == $max + 1;
        //      }

    }   

    public function getRiwayatBerobat($nik)
    {
            $builder = $this->db->table("antrian as antrian");
            $builder->select("antrian.ID, antrian.NAMA, antrian.POLI, antrian.TANGGAL, antrian.CATDOK");
            $builder->join('biodata as biodata', 'biodata.NAMA = antrian.NAMA');
            $builder->orderBy('antrian.TANGGAL', 'DESC');
            $data = $builder->getWhere(['biodata.NIK' => $nik])->getResult();
            return $data;
    }   

    public function getDaftarBerobat1($nik)
    {
            $builder = $this->db->table("antrian as antrian");
            $builder->select("antrian.ID, antrian.NAMA, antrian.POLI, antrian.TANGGAL");
            $builder->join('biodata as biodata', 'biodata.NAMA = antrian.NAMA');
            $builder->orderBy('antrian.TANGGAL', 'DESC');
            $data = $builder->getWhere(['biodata.NIK' => $nik])->getResult();
            return $data;
    }   

    public function getNama($nik)
    {
            $builder = $this->db->table("biodata");
            $builder->select("NAMA");
            $data = $builder->getWhere(['NIK' => $nik])->getResult();
            return $data;
    }   

    public function getBiodata($nik)
    {
            $builder = $this->db->table("biodata");
            $builder->select("*");
            $data = $builder->getWhere(['NIK' => $nik])->getResult();
            return $data;
    }   

    public function getKelamin()
    {
            $builder = $this->db->table("jenis_kelamin");
            $builder->select("*");
            $data = $builder->get()->getResult();
            return $data;
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