<?php 

class Productadd extends Controller {


    function index (){
      $category = $this->loadModel("category");
      $data["category"] = $category->getAllCategory();


      $this->view("productadd",$data);
    }

    function add(){
      
    }
}


?>