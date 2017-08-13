<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_test1 extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

	public function simpan($data){
   //return $this->db->insert('nama_tabel_kamu', $variabel_dari_param);
	 return $this->db->insert('siswa', $data);

	}



    function get_all_siswa() {
        $this->db->from('siswa');
        $query = $this->db->get();


        if ($query->num_rows() > 0) { //jika ada maka jalankan
            return $query->result();
        }
    }



}
