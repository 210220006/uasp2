<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel2 extends Model
{
    public function getdata()
    {
        $query = "SELECT mahasiswa.jk ,count(*) as jumlah, matkul.nama_matkul,mahasiswa.status FROM mahasiswa LEFT JOIN matkul ON mahasiswa.id_matkul = matkul.id_matkul GROUP BY mahasiswa.jk,matkul.nama_matkul,mahasiswa.status ORDER BY mahasiswa.jk ASC, mahasiswa.status ASC, matkul.nama_matkul DESC;";

        $query=$this->db->query($query);
        
        return $query->getResultArray();

     
    }
	
}

?>