<?php include "general/header.php" ?>

<?php 

if(isset($data["data"]) && $data["data"] != []){
    extract($data["data"]);
}else{
    $barcode = "";
    $name = "";
    $price = "";
    $count = "";
    $id = "";
}




?>


<!-- --------- _section start --------- -->
<section class="add">
    <h1>Ürün Ekleme Ekranı</h1>
    <form action="">
        <input class="text-box input-text" value="<?=$barcode?>" type="number" placeholder="barkod">
        <input class="text-box input-text" value="<?=$name?>" type="text" placeholder="ad">
        <input class="text-box input-text" value="<?=$count?>" type="number" placeholder="sayı">
        <div>

        

        <?php foreach($data["category"] as $catecory): ?>
            <input class="radio-input input-radio" name="catecory" type="radio" placeholder="ad"
            
            <?php 
                if($catecory["id"] == $id){
                    echo "checked";
                }
            ?>
            > <?=$catecory["category_name"]?> <br>
        <?php endforeach; ?> 
        </div>
        <input class="text-box input-text" value="<?=$price?>" type="number" placeholder="fiyat">
        <input class="input-btn" type="submit"  value="gönder">
    </form>
</section>
<!-- --------- _section end --------- -->

<?php include "general/footer.php" ?>