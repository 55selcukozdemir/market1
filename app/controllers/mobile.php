<?php 


class Mobile extends Controller {
    
    function index(){
        echo "kgkmflkg";
    }

    function token (){
        $mobile = $this->loadModel("mobilec");
        echo $mobile->createToken();
    }


    function getproduct($token){
        $mobile = $this->loadModel("mobilec");
        if($mobile->tokenControl($token)){
            print_r($mobile->allProduct());
        }
    }

    function sale($token){
        if($_SESSION["token"] == $token){
            $mobile = $this->loadModel("mobile");
            show($mobile->addSale());
        }
    }


}


?>