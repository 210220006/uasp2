<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getdata()
    {
        $query = "SELECT mahasiswa.jk, count(*) as jumlah, matkul.nama_matkul FROM mahasiswa
        LEFT JOIN matkul on mahasiswa.id_matkul = matkul.id_matkul group by mahasiswa.jk, matkul.nama_matkul
        order by mahasiswa.jk asc, matkul.nama_matkul desc";

        $query=$this->db->query($query);
        
        return $query->getResultArray();

     
    }
	
}

?>