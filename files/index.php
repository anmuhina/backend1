/*<?php
header('Content-Type: text/html; charset=UTF-8');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  print_r($_POST);
  }
?>*/

<?php

// Отправляем правильную кодировку.
//header('HTTP/1.1 404 Not Found');
header('Content-Type: text/html; charset=UTF-8');

// Выводим все полученные через POST параметры.
// если запрос 2-5) сделан правильно, то можно будет увидеть
// отправленный комментарий в ответе веб-сервера.
print_r($_POST);

// Hello World
print('Привет, мир!');

// Чтобы получить в переменную данные из сущности запроса.
$xml = file_get_contents('php://input');

// Память очищается в конце работы скрипта.
if (isset($v1)) {
  $v1++;
}
else {
  $v1 = 1;
}
print($v1);

// Если надо выполнить код из другого файла.
// include('form.php');
?>
