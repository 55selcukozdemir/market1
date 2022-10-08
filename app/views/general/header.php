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

    <title>Mahalle Market | Ana Sayfa</title>
</head>
<body>
    <!-- --------- _header start --------- -->
    <header>
        <h1>Mahalle<span>MARKET</span></h1>
        <img src="<?=ASSETS?>market/img/filter_list_.svg"  onclick="closeMenu()">
        <nav class="menu" id="menu">
            <ul>
                <li><a href="<?=ROOT?>">ANA SAYFA</a></li>
                <li><a href="<?=ROOT?>product">ÜRÜN</a></li>
                <li><a href="<?=ROOT?>logout">ÇIKIŞ</a></li>
            </ul>
        </nav>
    </header>
    <!-- --------- _header end --------- -->