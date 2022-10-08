<?php 

class Productcon extends Controller {


    // link eksik olduğunda ürün ekleme ekranına yönlendiriyor
    function index (){
        header("Location:". ROOT . "productadd");
        die;
    }


    // sayfayı açarken verilerin yüklü olmasını sağlıyor
    function add ($id = []){
        if($id != []){
            $pr = $this->loadModel("products");
            $data["data"] =  $pr->getproduct($id)[0];
            
            $category = $this->loadModel("category");
            $data["category"] = $category->getAllCategory();

            
            $this->view("productadd", $data);
        }else{
            header("Location:". ROOT . "productadd");
            die;
        }
    }

    // ürünleri güncelliyor
    function update($id){
        $pr = $this->loadModel("products");
        $pr->updateProduct($id);
        header("Location:". ROOT . "product");
        die;
            
    }

    // ürünleri siliyor
    function delete($id){
        $pr = $this->loadModel("products");
        $pr->deleteProduct($id);
        header("Location:". ROOT . "product");
        die;
    }



    
}

?>