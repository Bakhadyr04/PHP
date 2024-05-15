<?php

//9
$result9 = preg_replace('/(\w)\1/', '!', 'aae xxz 33a');
echo $result9;

//11
$result11 = preg_replace('/(\w+)@(\w+)/', '$2@$1', 'aaa@bbb eee7@kkk');
echo $result11;

//15
$result15 = preg_replace('/a\\\\a/', '!', 'a\a abc');
echo $result15;

//16
$result16 = preg_replace('/\b(\w+)\b/', '!$1!', 'xbx aca aea abba adca abea');
echo $result16;

//46
$result46 = preg_match('/2\+3/', '2+3 223 2223', $vyvod);
echo $vyvod[0];

//55
$result55 = preg_replace('/^aaa/', '!', 'aaa aaa aaa', 1);
echo $result55;
