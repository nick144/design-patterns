<?php

namespace Factory\config;

class dbConfig{

    public $config;

    function __construct(){
        $this->config['dbhost'] = 'localhost';
        $this->config['dbuser'] = 'root';
        $this->config['dbpass'] = '';
        $this->config['database']= 'website';
    }

}