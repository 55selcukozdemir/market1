<?php 

class Product extends Controller {

    function index (){

        $data["Pagle_title"]= "home";

        $this->view("product", $data);
    }
}

?>