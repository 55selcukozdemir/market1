<?php 

class Mobilec extends Database{


    function createToken (){
        
        $token = random_int(1000,1000000);
        $_SESSION["token"] = $token;
        return $token;
    }

    function tokenControl ($token){
        if($token == $_SESSION["token"] . $_SESSION["token"] . $_SESSION["token"]){
            return true;
        }else{
            return false;
        }
    }

    function allProduct(){
        $query = "select * from product p LEFT JOIN category c ON p.category_id = c.category_id";
		$data =$this->read($query);
        return $data;
    }

    function addSale(){
        $query = "INSERT INTO product (product_id, count, sale_group_id) VALUES (:product_id, :count, :sale_group_id)";
        $arr["product_id"] = $_POST["product_id"];
        $arr["count"] = $_POST["count"];
        $arr["sale_group_id"] = $_POST["sale_group_id"];
		$this->read($query,$arr);
    }

    
}

?>