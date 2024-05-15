<?php

//2
$file = fopen('test.txt', 'w');
fwrite($file, '12345');
echo 'Текст успешно записан в файл test.txt';

//8
$content = file_get_contents('test.txt');
file_put_contents('copy.txt', $content);

//11
$file = 'test.txt';
$fileSize = filesize($file);
echo "Размер файла $file: $fileSize байт";

//12
$oldName = 'old.txt';
$newName = 'new.txt';
if (rename($oldName, $newName)) {
    echo "Файл $oldName успешно переименован в $newName";
} else {
    echo "Не удалось переименовать файл $oldName в $newName";
}

?>