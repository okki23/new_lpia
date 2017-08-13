<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test1 extends Parent_controller {

    /*  var $parsing_form_input = array('id','nama_test1','alamat','no_telp','email');
      var $tablename = 'm_test1';
    */
    public function __construct() {
        parent::__construct();
        $this->load->model('m_test1');


    }

    public function index() {
        $data['judul'] = "OKE";

        $this->load->view('test1/test1_view', $data);
    }

    public function posting(){

      $pos_array = array("nama"=>$this->input->post('nama'),"alamat"=>$this->input->post('alamat'));
      //echo json_encode($pos_array);
      $save = $this->m_test1->simpan($pos_array);
      if($save){
        $pesan = array("pesan"=>"sukses");
        echo json_encode($pesan);
      }else{
        $pesan = array("pesan"=>"gagal");
        echo json_encode($pesan);
      }
    }

    public function search(){
      $kode = $this->input->post('kode',TRUE);
            $query = $this->m_test1->get_all_siswa();

            $siswa       =  array();
            foreach ($query as $d) {
                $siswa[]     = array(
                    'nama' => $d->nama,
                    'alamat' => $d->alamat ,

                );
            }
            echo json_encode($siswa);
    }


}
