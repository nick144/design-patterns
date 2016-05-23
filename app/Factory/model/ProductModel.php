<?php


namespace Factory\model;

use Factory\lib\DbConnect as DbConnect;

class ProductModel extends DbConnect{

    public function getProductById($id){
        $query = "SELECT * FROM products WHERE id = {$id}";
        
        $statement = $this->con->query($query);
        $result = $statement->fetch_assoc();
        $statement->free();

        return $result;
     }

    public function getAllProduct(){
        $query     = "SELECT * FROM products";
        $statement = $this->con->query($query);
        $result    = array();

        while($row = $statement->fetch_assoc()){
            $result[]=$row;
        }

        $statement->free();

        return $result;
        
    }
    
}