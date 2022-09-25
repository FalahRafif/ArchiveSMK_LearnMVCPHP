<?php

class About extends Controller {

    //method default
    //memberi parameter dan nilai default
    public function index($nama = "Falah", $jurusan = "System Analyts", $umur = 32){
        // echo " hallo nama saya $nama , saya seorang $jurusan, saya berumur $umur tahun";

        //data
        $data['nama'] = $nama;
        $data['jurusan'] = $jurusan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        //memanggil view
        //dan memisahkan header content footer
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        
        //data
        $data['judul'] = "My Pages";


        //memanggil view
        //dan memisahkan header content footer
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}