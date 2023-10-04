<?php require_once "inc/header.php"; ?>
<link rel="stylesheet" href="<?= $host ?>views/asset/css/sold.css">
<title>Document</title>
<?php require_once "inc/nav.php"; ?>
<h3>Ajouter des fonds</h3>
<div class="contenaire">
    <div class="left">
        <div class="payment"></div>
        <div class="payment2"></div>
        <div class="payment"></div>
        <div class="payment2"></div>
        <div class="payment"></div>
        <div class="payment2"></div>
        <div class="payment"></div>
        <div class="payment2"></div>
        <div class="payment"></div>
    </div>
    <div class="right">
        <div class="referenceCode">
            <div class="promoCodeTxt">

            </div>
            <div id="referanceContenaire">
                <input type="text" id="referance">
                <button>confirmet</button>
            </div>
        </div>
        <div class="valer">
            <button>5</button>
            <button>10</button>
            <button>20</button>
            <button>50</button>
            <button>100</button>
            <button>200</button>
        </div>
        <div class="confirmation"></div>
    </div>
</div>
<?php require_once "inc/footer.php"; ?>