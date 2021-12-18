<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/mobil',[
    'json' => [
        'type' => $_POST['type'],
        'plat' => $_POST['plat'],
        'kapasitas' => $_POST['kapasitas'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:index.php')

?>