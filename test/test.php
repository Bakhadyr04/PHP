<?php
//ex 1
    $a = 27; $b = 12;
    $gipotenuza = round(sqrt($a**2 + $b**2) ,2);

    echo $gipotenuza.'<br>';

//ex 8
    $a = true;
    $b = false;

    echo 'Значение a: '.($a ? 'true' : 'false').'<br>';
    echo 'Значение b: '.($b ? 'true' : 'false').'<br>';

//ex 10
    $hunter = 'охотник';
    $wants = 'желает';
    $know = 'знать';
    $sits = 'сидит'; 
    $fizan = 'фазан';

    echo 'Каждый '.$hunter.' '.$wants.' '.$know.', где '.$sits.' '.$fizan.'<br>';

//ex 11
    $quieter = 'Тише';
    $go = 'едешь';
    $further = 'дальше';

    echo $quieter.' '.$go.', '.$further.' будешь'.'<br>';

//ex16
    $notrisks = 'Кто не рискует';
    $notdrink = 'не пьет';
    $ellipsis = 'шампанского';

    echo $notrisks.' ,'.' тот '.$notdrink.' '.$ellipsis.'<br>';

//ex22
    $a = 4;
    $b = 3;
    $c = ' мандаринок';
    $mandarinki = $a*$b;

    echo $mandarinki.' '.$c.'<br>';

//ex 25
    $a = 148;
    $b = 76; 
    $c = ' голубя';
    $golubi = $a - $b;

    echo $golubi.' '.$c.'<br>';

//ex 44
    $year = 2022;
    $month = 3;
    $day = 2;
    $date = sprintf('Дата: %04d-%02d-%02d', $year, $month, $day);

    echo $date.'<br>';

//ex 46
    $dateMech = '13:54';
    $dateElec = '2022-03-18 13:54:14';
    $clockMech = 'Механические часы';
    $clockElec = 'Электронные часы';

    $mechanic = sprintf($clockMech.' '.$dateMech);
    $electronic = sprintf($clockElec.' '.$dateElec);
    echo $mechanic.'<br>';
    echo $electronic.'<br>';

//ex 47
    $number = 362525200;
    $notacionnumber = sprintf('Переменная: %.2e', $number);

    echo $notacionnumber;
?>