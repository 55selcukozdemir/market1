<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ASSETS?>market/css/general.css">
    <link rel="stylesheet" href="<?=ASSETS?>market/css/main.css">
    <link rel="stylesheet" media="(max-width: 768px)" href="<?=ASSETS?>market/css/tablet.css">
    <link rel="stylesheet" media="(max-width: 500px)" href="<?=ASSETS?>market/css/phone.css">

    <title>Mahalle Market | Giriş Sayfası</title>
</head>
<body>
    <!-- --------- _section start --------- -->
    <div class="container">
        <h1 id="title">Mahalle<span>MARKET</span></h1>
        <h4 style="margin-top:25px; color: red;">
        <?php 
        if(isset($_SESSION["error"])){ 
            
            echo ($_SESSION["error"]);
            $_SESSION["error"] = "";
            } 
            
        ?>
        </h4>
        <form action="<?=ROOT?>login" method="post">
            <input class="text-box custom-input" name="username" type="text" placeholder="kullanıcı adı">
            <input class="text-box custom-input" name="password" type="text" placeholder="şifre">
            <input class="btn-blue" type="submit" value="giriş">
        </form>
    </div>
    <!-- --------- _section end --------- -->
<?php include "general/footer.php" ?>
