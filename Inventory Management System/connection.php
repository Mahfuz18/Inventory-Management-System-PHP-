<?php

class Connection{

    public $cn;

    public function __construct()
    {
        $host="localhost";
        $user="root";
        $pass="";
        $database="inventory";


        $this->cn=new mysqli($host,$user,$pass,$database);

        if(!$this->cn->connect_error){

            // echo "Database connected";
        }

        else{
            echo "Database not connected";
        }
    }
}


?>