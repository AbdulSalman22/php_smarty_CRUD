<?php

class Database {

    public $host;
    public $username;
    public $password;
    public $db_name;

    public $con;
    public $exec;
    public $result;

   public function __construct()
   {
       $this->host = 'localhost';
       $this->username = 'root';
       $this->password = '';
       $this->db_name = 'feedback';
   }

   public function Connect()
   {
       $this->con = mysqli_connect($this->host, $this->username, $this->password) or die('Connection string Error');
       mysqli_select_db($this->con, $this->db_name) or die("$this->db_name this Database not found");
   }

   public function Query($qry) 
   {
        $this->Connect();
        $this->exec = mysqli_query($this->con, $qry);
        return $this->exec;
        // if($this->exec){
          
        //     if(strpos($qry, "SELECT")){
        //        return $this->result = mysqli_fetch_object($this->exec);
        //     } else {
        //         return $this->result = $this->exec;
        //     }
        // }
   }
}
