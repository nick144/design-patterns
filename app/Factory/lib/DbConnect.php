<?php

namespace Factory\lib;

use Factory\config\dbConfig as dbConfig;

class DbConnect{

    public $con;
    
    function __construct(){

        $db = new dbConfig();
        
        $this->con = new \mysqli($db->config['dbhost'], $db->config['dbuser'], $db->config['dbpass'], $db->config['database']);

        if($this->con->connect_errno > 0){
            die('Unable to connect to database ['.$this->con->connect_error.']');
        }
    }

    function db(){
        return $this->con;
    }
}