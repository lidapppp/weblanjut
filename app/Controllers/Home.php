<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		
		
	}
	 
	public function show()
	{
		$data ['title'] = 'm.fadhil azhari' ;
		
		echo view('mahasiswa/header', $data);
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer', $data);
	}

	//--------------------------------------------------------------------

}
