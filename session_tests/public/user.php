<?php session_start();
if(!empty($_SESSION['email']))
    $email = $_SESSION['email'];
else
    $email = '';
$country = $_SESSION['country'] ?? "Невідома, потрібно ввести";
?>

<div>Вивід інформації с першої сторінки: <?php echo $_SESSION['test'] ?></div>
<div>Моя країна: <strong><?php echo $country?></strong></div>
<form action="" method="GET">
    <input type="text" name="email" value="<?php echo $email ?>">
    <input type="submit">
</form>
