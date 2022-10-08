<?php 

class Productadd extends Controller {


    function index (){
      $data['page_title'] = "productadd";

      $this->view("productadd",$data);
    }
}


?>