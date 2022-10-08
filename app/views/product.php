<?php include "general/header.php" ?>

<!-- --------- _section start --------- -->
<section class="main">
    <div class="bar">
        <a href="productadd"><img src="<?=ASSETS?>market/img/add.svg" alt=""></a>
        <input type="text" placeholder="ürün adı giriniz">
    </div>
    <div class="table">
        <table>
            <thead class="thad">
                <tr>
                    <th><div><span>id</span><img src="<?=ASSETS?>market/img/filter_list_.svg"></div></th>
                    <th>barkod</th>
                    <th><div><span>ad</span><img src="<?=ASSETS?>market/img/filter_list_.svg"></div></th>
                    <th>sayı</th>
                    <th><div><span>kategori</span><img src="<?=ASSETS?>market/img/filter_list_.svg"></div></th>
                    <th>fiyat</th>
                    <th>düzenleme</th>
                </tr>
            </thead>
            <tbody>

            <?php if (!isset($data)){ ?>

            <?php foreach($data as $d): ?>

                <tr>
                    <td><?php echo  $d["id"]?></td>
                    <td><?php echo  $d["barcode"]?></td>
                    <td><?php echo  $d["name"]?></td>
                    <td><?php echo  $d["count"]?></td>
                    <td><?php echo  $d["category_name"]?></td>
                    <td><?php echo  $d["price"]?></td>
                    <td>
                        <a href="productcon/add/<?= $d["id"]?>"><img src="<?=ASSETS?>market/img/edit.svg"></a>
                        <a href="productcon/delete/<?= $d["id"]?>"><img src="<?=ASSETS?>market/img/delete.svg"></a>
                    </td>
                </tr>


            <?php endforeach ?>

            <?php } ?>



            </tbody>
        </table>
    </div>
</section>
<!-- --------- _section end --------- -->

<?php include "general/footer.php" ?>