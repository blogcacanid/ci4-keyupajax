<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PegawaiModel;

class Pegawai extends Controller
{
	public function index()
	{
		echo view('layouts/header');
		echo view('pegawai');
		echo view('layouts/footer');
	}

	public function index1()
	{
        $model = new PegawaiModel();
        $data['pegawai'] = $model->orderBy('nip', 'DESC')->findAll();
        return view('pegawai', $data);
		echo view('layouts/header');
		echo view('layouts/footer');
		echo view('pegawai',$data);
	}
    public function find_NIP()
    {
        $nip =  $this->request->getVar('nip');
        if($this->request->isAJAX()) {
            $data 		= '';
			$db 		= \Config\Database::connect();
			$builder 	= $db->table('pegawai');
			$qry 		= $builder->getWhere(['nip' => $nip]);
			foreach ($qry->getResult() as $row){
                $data = array(
                        'nama_pegawai'  =>  $row->nama_pegawai,
                        'alamat'        =>  $row->alamat
                    );
			}
            echo json_encode($data);
        }
    }

}
