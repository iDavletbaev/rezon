<?php
// Получаем данные формы
$data = $_POST;

// Возвращаем данные в формате JSON
header('Content-Type: application/json');
echo json_encode($data);

// Если произошла ошибка, возвращаем сообщение об ошибке
if (isset($_POST['error'])) {
  http_response_code(400);
  echo json_encode(['error' => 'Ошибка: ' . $_POST['error']]);
}
