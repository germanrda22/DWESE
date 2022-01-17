<?php
    setcookie('micookie','valor de mi primera cookie');

    setcookie('ayear','valor de mi cookie 365 días', time()+(60*60*24*365));

    header('Location:ver_cookies.php');
?>