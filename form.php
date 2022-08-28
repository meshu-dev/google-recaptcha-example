<?php

require __DIR__ . '/init.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$message = $_POST['message'] ?? '';
$token = $_POST['token'] ?? '';

$data = [
	'secret' => $_ENV['GOOGLE_SECRET_KEY'],
	'response' => $token
];

// Testing locally without SSL certificate so set verify to false
$client = new GuzzleHttp\Client(['verify' => false]);
$response = $client->request(
	'POST',
	'https://www.google.com/recaptcha/api/siteverify',
	['form_params' => $data]
);

$contents = $response->getBody()->getContents();
$verifyResponse = json_decode($contents, true);

$isSuccess = $verifyResponse['success'] ?? false;
$response = ['success' => $isSuccess];

echo json_encode($response);
exit;
