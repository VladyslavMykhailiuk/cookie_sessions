<?php session_start();
if(!empty($_SESSION['age']))
    $age = $_SESSION['age'];
else
    $age = '';
if(!empty($_SESSION['city']))
    $city = $_SESSION['city'];
else
    $city = '';
?>



<form action="" method="GET">
    <input type="number" placeholder="Введіть вік" value="<?php echo $age ?>">
    <input type="text" placeholder="Введіть місто" value="<?php echo $city ?>">
    <input type="text" placeholder="Введіть ім'я">
    <input type="submit">
</form>
