<?php
if (isset($_COOKIE['birthday_day']))
{
    $birthday = $_COOKIE['birthday_day'];
}

if (isset($_POST['day']) && isset($_POST['month']))
{
    $birthday = mktime(0,0,0, $_POST['month'], $_POST['day']);
    setcookie('birthday_day',$birthday,0);
}

if (isset($_COOKIE['birthday_day']) || (isset($_POST['day']) && isset($_POST['month'])))
{
    if (date('d.m') == date('d.m', $birthday))
        echo "Поздравляем вас с днем рождения! "."<br>";
    else
    {
        $next_birthday = mktime(0,0,0, date('m', $birthday), date('d', $birthday));
        if (($next_birthday - time()) < 0)
            $next_birthday = mktime(0,0,0, date('m', $birthday), date('d', $birthday));
        $days_left = ceil(($next_birthday - time())/24/3600);
        if ($days_left<0)
        {
            $left = 365+$days_left;
            echo "До вашего дня рождения осталось ". $left . " дней <br>";
        }
        else
            echo "До вашего дня рождения осталось" . $days_left . " дней <br>";
    }
}
?>

<form action="" method="post">
    День:<input type="text" name="day"><br>
    Місяц:<input type="text" name="month"><br>
    <input type="submit">
</form>
<a href="index.php">Перейти на головну</a>


