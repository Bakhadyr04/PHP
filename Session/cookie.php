<?php
    setcookie('ok', 'Test1', time()+3600);

    echo $_COOKIE['ok'].'<br>';

    setcookie('ok', 'Test1', time());