<?php include "general/header.php" ?>

<?php 

if(isset($data["data"]) && $data["data"] != []){
    extract($data["data"]);
    $action = ROOT.  "productcon/update/" . $id;
}else{
    $barcode = "";
    $name = "";
    $price = "";
    $count = "";
    $id = "";
    $category_id ="";
    $action = "productadd/add";
}?>


<!-- --------- _section start --------- -->
<section class="add">
    <h1>Ürün Ekleme Ekranı</h1>
    <form action="<?=$action ?>" method="POST">
        <input class="text-box input-text" name="barcode" value="<?=$barcode?>" type="number" placeholder="barkod">
        <input class="text-box input-text" name="name" value="<?=$name?>" type="text" placeholder="ad">
        <input class="text-box input-text" name="count" value="<?=$count?>" type="number" placeholder="sayı">
        <div>

        

        <?php foreach($data["category"] as $catecory): ?>
            <input class="radio-input input-radio" name="category" type="radio" placeholder="ad"
            
            <?php 
                if($catecory["category_id"] == $category_id){
                    echo "checked";
                }
            ?>

            value="<?=$catecory["category_id"]?>"
            > <?=$catecory["category_name"]?> <br>
        <?php endforeach; ?> 
        </div>
        <input class="text-box input-text" name="price" value="<?=$price?>" type="number" placeholder="fiyat">
        <input class="input-btn" type="submit"  value="gönder">
    </form>
</section>
<!-- --------- _section end --------- -->

<?php include "general/footer.php" ?>