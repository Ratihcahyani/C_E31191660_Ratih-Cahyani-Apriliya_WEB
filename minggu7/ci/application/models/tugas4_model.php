<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Ratih Cahyani Apriliya","nim"=>"E31191660"],
			["nama"=>"Hamdy Wahid","nim"=>"E31192285"],
			["nama"=>"Esmeralda","nim"=>"E31167890"] 
        ];
        return $data_mahasiswa;
	}
}
?>