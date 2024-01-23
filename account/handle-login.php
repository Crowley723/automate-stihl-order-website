<?php
// setting up independent http client 
$httpClient = new Client();

// setting up vault auth provider
$auth = new Token('foo');

// creating the vault request client
$client = new VaultClient(
    $httpClient,
    $auth,
    'http://127.0.0.1:8200'
);

// selecting the desired secret engine
// e.g. Transit Secret Engine
$api = new Transit($client);

// calling specific endpoint
$response = $api->listKeys();

//reading results
var_dump($response->getKeys());
//...
//...
//Profit...