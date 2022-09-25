<?php 

class Controller {

    //membuat method view yg berisi view dan data yg mau di kirim / tidak (array)
    public function view($view, $data = []){
        //mencari view
        require_once '../app/views/' . $view . '.php';
    }

    //model
    public function model($model){

        require_once "../app/models/" . $model . '.php';

        //mengembalika dan menginstansiasi model baru
        return new $model;

    }

}