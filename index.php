<?php
require_once __DIR__.'/vendor/autoload.php';
use  GuzzleHttp\Client; 
use Synfony\Component\HttpFoundation\Response;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
	
	$client = new Client();
	$url = "http://api.openweathermap.org/data/2.5/weather?id=3530597&ppid=162158834d5f09a730c859a1a94e98ac&units=metric";
	$response= $client->get($url);
	$body = $response->getBody();


	return $body;
	
});

$app->run();
