<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller 
{
	public function index()
	{
		$data['Mahasiswa'] = [
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
	$this->load->view('view_mahasiswa',$data);
}
public function prodi()
{
	$data['Mahasiswa'] = [
		["keterangan"=>"Manajemen Informatika","prodi"=>"MIF"],
		["keterangan"=>"Teknik Komputer","prodi"=>"TKK"],
		["keterangan"=>"Teknik Informatika","prodi"=>"TIF"]
    ];
	$this->load->view('view_prodi',$data);

}
public function angkatan()
{
    $data['Mahasiswa'] = [['tahun'=>2016],
                            ['tahun'=>2017],
                            ['tahun'=>2018]];
    $this->load->view('view_angkatan',$data);
}
public function profil()
{
	echo "ini adalah method profil pada controller Mahasiswa";
}
}