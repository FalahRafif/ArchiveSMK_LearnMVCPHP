<?php

class Database {

    //data 
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh; //db handler
    private $stmt; //statement

    public function __construct(){
         //data source name
         $dsn = 'mysql:host=' . $this->host . ';dbname='. $this->db_name;
        
         //option untuk mengoptimasi db
         $option = [
             PDO::ATTR_PERSISTENT => true ,
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
         ];
         //try konek db
         try {
             $this->dbh = new PDO($dsn,$this->user,$this->pass, $option);
         
         //jika gagal maka di tangkap
         } catch( PDOException $e ){
             die($e->getMessage());
         }
    }




    //query
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);

    }
    
    //bind data (where , values , set , etc)
    public function bind($param , $value, $type = null){
        if( is_null($type)){

            //menyalakan switch
            switch( true ){
                //case

                //jika value int ubah int
                case is_int($value) : 
                    $type = PDO::PARAM_INT;
                    break;
                
                //jika value bool ubah bool
                case is_bool($value) : 
                    $type = PDO::PARAM_BOOL;
                    break;

                //jika value null ubah null
                case is_null($value) : 
                    $type = PDO::PARAM_NULL;
                    break;
                
                //nilai default
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        //mengembalikan data yg di bind
        $this->stmt->bindValue($param, $value, $type);


    }

    //mengesekusi stmt
    public function execute(){
        

        $this->stmt->execute();
    }

    //hasil esekusi (data banyak)
    public function resultSet(){
        $this->execute();

        //mengfetch
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //hasil esekusi (data dikit)
    public function single(){

        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}