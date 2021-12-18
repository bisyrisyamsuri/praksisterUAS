<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
// echo $id;
// echo $_POST['alamat'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/mobil',[
    'json' => [
        'id' => $id,
        'type' => $_POST['type'],
        'plat' => $_POST['plat'],
        'kapasitas' => $_POST['kapasitas'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:index.php')
// var_dump($body);

?>