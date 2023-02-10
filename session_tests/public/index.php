<?php
session_start();
$_SESSION['test'] = 'test';
if (!empty($_POST['country']))
{
    $_SESSION['country'] = $_POST['country'];
}


if(!isset($_SESSION['counter'])) {
    echo "Ви ще не відвідували сторінку";
    $_SESSION['counter'] = 0;
}
else {
    $_SESSION['counter']++;
    echo "Кількість оновлень сторінок:" . $_SESSION['counter'];
}


if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}

if (!empty($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}

if (!empty($_POST['age'])) {
    $_SESSION['age'] = $_POST['age'];
}

if (!empty($_POST['city'])) {
    $_SESSION['city'] = $_POST['city'];
}

?>

<div>Вміст сесії:<?php echo $_SESSION['test'] ?> </div>
<div>Користувач зайшов <?php echo time() - $_SESSION['time']; ?> секунд назад</div>
<form action="" method="post" enctype="multipart/form-data">
    <div>Введіть свою країну</div>
    <input type="text" name="country" placeholder="Введіть вашу країну">
    <div>
        <input type="email" name="email" placeholder="Введіть ваш e-mail">
        <input type="number" name="age" placeholder="Введіть ваш вік">
        <input type="text" name="city" placeholder="Введіть ваше місто">

    </div>
    <input type="submit" value="Зберегти дані">
</form>
<a href="user.php">Перейти до профілю</a>
<a href="form.php">Перейти до форми</a>
<a href="logout.php">Перейти до деактивації сесії</a>


