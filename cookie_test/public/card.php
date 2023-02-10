<?php
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    
    <li>
        <img width="100px" src="https://content.rozetka.com.ua/goods/images/big/242977791.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Порошок, ціна: 100 гривень</label>
            <input type="hidden" name="product" value="Порошок">
            <input type="hidden" name="test1" value="100">
            <input type="submit" value="Додати товар у кошик">
        </form>
    </li>
    <li>
        <img width="100px" src="https://pwa-api.eva.ua/img/512/512/resize/4/5/456485_1_1663858448.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Капсули, ціна: 50 гривень</label>
            <input type="hidden" name="product" value="Капсули">
            <input type="hidden" name="test1" value="50">
            <input type="submit" value="Додати товар у кошик">
        </form>
    </li>
    <li>
        <img width="100px" src="https://rivnepost.rv.ua/img/650/hospodarske-milo-na-vsi-vipadki-zhittya_20210623_8667.jpg" alt="">

        <form action="action2.php" method="post">
            <label for="product">Мило, ціна: 10 гривень</label>
            <input type="hidden" name="product" value="Мило">
            <input type="hidden" name="test1" value="10">
            <input type="submit" value="Додати товар у кошик">
        </form>
    </li>
    <li>
        <img width="100px" src="data:image/jpeg;base64,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" alt="">

        <form action="action2.php" method="post">
            <label for="product">Духи, ціна: 1000 гривень</label>
            <input type="hidden" name="product" value="Духи">
            <input type="hidden" name="test1" value="1000">
            <input type="submit" value="Додати товар у кошик">
        </form>
    </li>
    <li>
        <img width="100px" src="https://pwa-api.eva.ua/img/512/512/resize/5/7/574665_1_1599124475.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Спрей, ціна: 40 гривень</label>
            <input type="hidden" name="product" value="Спрей">
            <input type="hidden" name="test1" value="40">
            <input type="submit" value="Додати товар у кошик">
        </form>

    </li>
</ul>
<div>Загальна сума покупки: <?php
   if(isset($_SESSION['test1'])) {
       $arr = json_decode($_SESSION['test1']);
       echo array_sum($arr);
   }
   else echo 0;
    ?> грн</div>
<div>Ви додали до кошика: <?php
   if(isset($_SESSION['products'])) {
       $arrProd = json_decode($_SESSION['products']);
       foreach ($arrProd as $item) {
           echo $item . ', ';
       }
   }
   else echo 'Порожньо. Скоріше додайте щось!'
    ?></div>
</body>
</html>
