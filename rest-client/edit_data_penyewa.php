<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$id = $_GET['id'];
// echo $id;
// echo $_POST['alamat'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/penyewa',[
    'json' => [
        'id' => $id,
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'notelp' => $_POST['notelp']
    ]
]);

$body = $response->getBody();
header('location:penyewa.php')
// var_dump($body);

?>