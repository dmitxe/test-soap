
Метод Calculate предназначен для получения цены и информации. Входные параметры

- city город, строка
- name имя, строка
- date дата, строка в формате Y-m-d H:i:s
- field1 поле 1, строка
- field2 поле 2, строка
- field3 поле 3, строка

Запрос возвращает price и info. В случае возникновения ошибки приходит только error.

Метод описан в схеме WSDL по адресу http://backend.soap.mysite/soap

Метод требует авторитизации. В случае неудачи возвращает код 401 и описание ошибки.

Пример вызова для php клиента

$client = new \SoapClient($wsdl, [
	'login' => 'login',
	'password' => 'password',
	'exceptions' => 0,
	'soap_version' => SOAP_1_2,
	'cache_wsdl' => WSDL_CACHE_MEMORY,
]);

$result = $client->__soapCall('Calculate', [
	'city' => 'city',
	'name' => 'name',
	'date' => '2019-01-30 00:00:00',
	'field1' => 'field1',
	'field2' => 'field2',
	'field3' => 'field3',
]);

if (is_soap_fault($result)) {
	trigger_error("Ошибка SOAP: (faultcode: {$result->faultcode}, faultstring: {$result->faultstring})", E_USER_ERROR);
} 

$price = $result['price'];
$info = $result['info'];
