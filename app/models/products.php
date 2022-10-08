<?php 

class Products {
    function __construct()
    {
        $this->db = new Database();
    }


    function getAllProduct(){
        $query = "select * from product p LEFT JOIN category c ON p.category_id = c.id";
		$data =$this->db->read($query);
        return $data;
    }

    function getProduct ($id){
        $query = "select * from product where id=:id limit 1";
        $arr["id"] = $id; 
		return $this->db->read($query, $arr);
    }

    function updateProduct ($id, $list){
        $query = "UPDATE ";
		$DB = new Database();
		$data = $DB->read($query);
    }

    function deleteProduct($id){
        $query = "DELETE from product where id=$id";
		$DB = new Database();
		$DB->read($query);
    }

    function insertProduct(){
        $query = "select * from product where id=$";
		$DB = new Database();
		$data = $DB->read($query);
    }

}

?>