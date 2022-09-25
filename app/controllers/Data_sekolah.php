<?php

class Data_sekolah extends Controller {

    
    public function index(){
        
        //data
        $data['judul'] = 'Daftar Mahasiswa';
        $data['sklh'] = $this->model('Data_sekolah_model')->getAllsekolah();


        //memanggil view
        $this->view('templates/header', $data);
        $this->view('data_sekolah/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
                //data
                $data['judul'] = 'Detail Mahasiswa';
                $data['sklh'] = $this->model('Data_sekolah_model')->getsekolahById($id);
        
        
                //memanggil view
                $this->view('templates/header', $data);
                $this->view('data_sekolah/detail', $data);
                $this->view('templates/footer');
    }
}