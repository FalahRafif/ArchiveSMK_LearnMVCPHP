<?php 


//extend dari parent controller
class Home extends Controller {
    public function index(){

        //data
        $data['judul'] = "Home";

        //memanggil model
        $data['nama'] = $this->model('User_model')->getUser();


        //memanggil view
        //dan memisahkan header content footer
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}