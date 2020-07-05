<?php
$ch = curl_init();
echo "/credential";
$params = '{
	"key":"123456",
	"shared_secret":"123456"
}';
curl_setopt($ch, CURLOPT_URL, "http://localhost:7001/MasterDevel/webresources/credential");
$headers = array(
    'Content-Type: application/json'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST , "PUT");
$res = curl_exec($ch);
echo $res;
curl_close($ch);

$ch1 = curl_init();
echo "POST /message";
$params = '{
	"msg":"Hola",
	"tags":"Bienvenido"
}';
curl_setopt($ch1, CURLOPT_URL, "http://localhost:7001/MasterDevel/webresources/message");
$headers = array(
    'Content-Type: application/json',
    'X-Key: 123456',
    'X-Route: message'
);
curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch1, CURLOPT_CUSTOMREQUEST , "POST");
$res = curl_exec($ch1);
echo $res;
curl_close($ch1);


$ch2 = curl_init();
echo "GET /message/<id>";
curl_setopt($ch2, CURLOPT_URL, "http://localhost:7001/MasterDevel/webresources/message/1/");
$headers = array(
    'Content-Type: application/json',
    'X-Key: 123456',
    'X-Route: message'
);
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST , "GET");
$res = curl_exec($ch2);
echo $res;
curl_close($ch2);


$ch3 = curl_init();
echo "GET /messages/<tag>";
curl_setopt($ch3, CURLOPT_URL, "http://localhost:7001/MasterDevel/webresources/messages/Bienvenido/");
$headers = array(
    'Content-Type: application/json',
    'X-Key: 123456',
    'X-Route: message'
);
curl_setopt($ch3, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch3, CURLOPT_CUSTOMREQUEST , "GET");
$res = curl_exec($ch3);
echo $res;
curl_close($ch3);

?>
