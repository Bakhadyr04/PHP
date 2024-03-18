<?php


// if (!$_GET)
// {
//     if (isset($_GET['name']) && !empty($_GET['name'])) echo 'HELLO, '.$_GET['name'].'!';
//     else echo 'no';
// }

// if (!empty($_POST)){
//     if (isset($_POST['name'])) echo 'HELLO, ' .$_POST['name'] . '<br>';
//     if (isset($_POST['age'])) echo $_POST['age'];
// }



//3
$array = [1, 2, 3, 4, 5];

$flippedArray = array_flip($array);
$reversedArray = array_reverse($flippedArray);
$resultArray = array_values($reversedArray); 
 
print_r($resultArray);


//7
$array1 = [1,2,3];
$array2 = ['a', 'b', 'c'];

$resultArray = array_merge($array1, $array2);

print_r($resultArray);


//26
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    echo "Число, полученное из GET-запроса: $number";
} else {
    echo "Ошибка: Параметр 'number' не был передан в GET-запросе.";
}

//33
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];

echo 'Зарплата Коли: ' . $arr['Коля'] . '<br>';
echo 'Зарплата Пети: ' . $arr['Петя'];


//56
function getDayOfWeek($number) {
    switch ($number) {
        case 1:
            return 'Понедельник';
        case 2:
            return 'Вторник';
        case 3:
            return 'Среда';
        case 4:
            return 'Четверг';
        case 5:
            return 'Пятница';
        case 6:
            return 'Суббота';
        case 7:
            return 'Воскресенье';
        default:
            return 'Некорректный день';
    }
}

$dayNumber = 2;
$dayOfWeek = getDayOfWeek($dayNumber);
echo "День недели с номером $dayNumber: $dayOfWeek";

?>