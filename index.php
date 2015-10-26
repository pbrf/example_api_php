<?php

//функция к которой делаем запрос
$url = 'http://pbrf.ru/pdf.F7';
//параметры функции
$data = array(
	'type_blank' => 'a',

	'from_surname' => 'Иванова',
	'from_name' => 'Ивана Ивановича',
	'from_city' => 'г. Москва',
	'from_street' => 'ул. Стахановская',
	'from_build' => '999',
	'from_appartment' => '99',
	'from_zip' => '109428',

	'whom_surname' => 'Петрову',
	'whom_name' => 'Петру Петровичу',
	'whom_city' => 'г. Санкт-Петербург',
	'whom_street' => 'ул. Гоголя',
	'whom_build' => '888',
	'whom_appartment' => '88',
	'whom_zip' => '190000',

	'declared_value' => '1000.00',
	'COD_amount' => '1100.00'
);

//Подготовка данных для передачи
$post = array(
	'access_token' => 'YOUR_ACCESS_TOKEN',
	'data' => json_encode($data)
);

//В примере используется библиотека curl
//Инициализируем библиотеку
$ch = curl_init();
//Устанавливаем адрес куда будем отправлять запрос
curl_setopt($ch, CURLOPT_URL, $url);
//Указываем, что полученные данные не выводить сразу на экран
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//Устанавливаем метод запроса POST
curl_setopt($ch, CURLOPT_POST, true);
//Передаем подготовленные данные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
//Передаем полученный ответ переменной
$res = curl_exec($ch);
curl_close($ch);
?>