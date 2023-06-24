<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel1 extends Model
{
    public function getdata()
    {
        $query = "SELECT sks,nama_matkul FROM `matkul` ORDER BY sks ASC;";

        $query=$this->db->query($query);
        
        return $query->getResultArray();

     
    }
	
}

?>