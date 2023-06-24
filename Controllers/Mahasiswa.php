<?php
    namespace App\Controllers;
    use App\Models\MahasiswaModel;

    class Mahasiswa extends BaseController
    {
        function __construct(){
            $this->MahasiswaModel = new MahasiswaModel();
        }
        public function index()
        {
           $data['Mahasiswa'] = $this->MahasiswaModel->getdata();
           
            return view('Mahasiswa', $data);
        }
	
}

?>