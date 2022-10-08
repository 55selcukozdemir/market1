<?php 

class Productcon extends Controller {

    function index ($data1 = []){
        $pr = $this->loadModel("products");
        
        $data = $pr->getAllProduct();

        print_r($data);
        
        $this->view("productadd", $data);
    }


    
    

}

?>