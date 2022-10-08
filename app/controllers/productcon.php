<?php 

class Productcon extends Controller {

    function index (){
    
        $this->view("productadd", []);
    }

    function add ($id){
        $pr = $this->loadModel("products");
        $data["data"] =  $pr->getproduct($id)[0];
        

        $category = $this->loadModel("category");
        $data["category"] = $category->getAllCategory();


        $this->view("productadd", $data);
    }

    function delete($id){
        $pr = $this->loadModel("products");
        $pr->deleteProduct($id);
        header("Location:". ROOT . "product");
        die;
    }

    
}

?>