<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получение данных из формы
  $phoneNumber = $_POST['login'];

  // Путь к файлу, в который будут сохранены данные
  $file = 'file.txt'; // Замените на путь к желаемому файлу

  // Открытие файла в режиме записи
  $handle = fopen($file, 'a'); // 'a' означает, что данные будут добавлены в конец файла

  // Запись данных в файл
  if ($handle) {
    fwrite($handle, $phoneNumber . PHP_EOL); // PHP_EOL добавляет символ новой строки после каждого номера
    fclose($handle);
    echo 'Данные успешно сохранены в файле.';
  } else {
    echo 'Ошибка при сохранении данных.';
  }
}
?>
