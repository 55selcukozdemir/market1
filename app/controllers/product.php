<?php 

class Product extends Controller {

    function index (){


        $product = $this->loadModel("products");
        $data = $product->getAllProduct();

        $this->view("product", $data);
    }
}

?>