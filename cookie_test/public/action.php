<?php
if(isset($_POST['hide'])){
    setcookie('hideBanner',true,time()+60*60*24*30);
}
header('Location: http://127.0.0.1:8876/index.php');