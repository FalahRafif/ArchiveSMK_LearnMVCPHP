<?php

class Data_sekolah_model {
    private $table = 'sekolah';
    private $db;



    public function __construct(){
        $this->db = new Database;

    }

    //mengambil semua data sklh
    public function getAllsekolah(){
        
        // //query ke database
        // $this->stmt = $this->dbh->prepare('SELECT * FROM sekolah');
        // $this->stmt->execute();

        // //meng fecth daya
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);



        //query ke database
        $this->db->query('SELECT * FROM ' . $this->table);

        //mengembalikan hasil fecth
        return $this->db->resultSet();
    }

    public function GetsekolahById($id){

        //query tabel
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
 
        //bind dengan id 
        $this->db->bind('id', $id);

        //mengembalikan db  
        return $this->db->single();
    }

} 