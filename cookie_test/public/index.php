<?php
// Завдання 1
setcookie('visit',0,0);
if(isset($_COOKIE['visit'])) {
    setcookie('visit',$_COOKIE['visit']+1);
    echo "Ви відвідали наш сайт ".$_COOKIE['visit'] . " раз(ів)";
}
else {
    echo "Ви ще не відвідували нашого сайту";
}
// Завдання 3
setcookie('days',date("Y-m-d H:i:s"));
$days = (time() - strtotime($_COOKIE['days']))/(3600*24);
echo "Вы не были на нашем сайте ".floor($days)." дней"

// Завдання 4

?>

<?php if(!isset($_COOKIE['hideBanner'])){ ?>
    <div>Банер якоїсь поганої реклами...</div>
    <form action="action.php" method="POST">
        <input type="submit" value="Закрити на місяць погану рекламу" name="hide">
    </form>
<?php } ?>
<a href="birthday_test.php">Перейти до завдання з днем народження(5)</a>
<a href="cap_test.php">Перейти до завдання з шапкою (6)</a>
<a href="card.php">Перейти до завдання з кошиком(7)</a>









