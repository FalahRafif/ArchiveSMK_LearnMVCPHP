<?php

class App {

    //membuat atribut
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    //menangkap data di url
    public function __construct(){
        

        //controller
        $url = $this->parseURL();
        
        //mencari file 
        if( file_exists('../app/controllers/' . $url[0] . '.php')){
            //timpa controller lama ke baru
            $this->controller = $url[0];
            //hilangkan controller dari elemen array nya
            unset($url[0]);
        }
        //memanggil controller
        require_once '../app/controllers/'. $this->controller . '.php';
        //menginstansiasi controller baru
        $this->controller = new $this->controller; 


        
        //method
        //cek apakah ada method
        if(isset($url[1])){
            //cek apaka ada method di controller
            if( method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //parameter 
         if( !empty($url)){
             //memasukan arrat url ke params
             $this->params =  array_values($url);
         }

         //menjalankan controller $ method dan kirimkan params jika ada
         call_user_func_array([$this->controller, $this->method], $this->params);
    }


    //mengabil data apapun di url
    public function parseURL(){

        if (isset($_GET['url'])) {
            //hilangkan akhiran "/"
            $url = rtrim($_GET['url'], '/');
            //bersikan char yg tidak jelask
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //memecah url
            $url = explode('/', $url);
            return $url;
        }
    }     
}