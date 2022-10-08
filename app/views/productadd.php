<?php include "general/header.php" ?>

<!-- --------- _section start --------- -->
<section class="add">
    <h1>Ürün Ekleme Ekranı</h1>
    <form action="POST">
        <input class="text-box input-text" type="number" placeholder="barkod">
        <input class="text-box input-text" type="text" placeholder="ad">
        <input class="text-box input-text" type="number" placeholder="sayı">
        <div>
            <input class="radio-input input-radio" name="catecory" type="radio" placeholder="ad">atıştırmalık <br>
            <input class="radio-input input-radio" name="catecory" type="radio" placeholder="ad">temizlik <br>
            <input class="radio-input input-radio" name="catecory" type="radio" placeholder="ad">mutfak <br>
        </div>
        <input class="text-box input-text" type="number" placeholder="fiyat">
        <input class="input-btn" type="submit"  value="gönder">
    </form>
</section>
<!-- --------- _section end --------- -->

<?php include "general/footer.php" ?>