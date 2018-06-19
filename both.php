<?php
require_once 'vendor/autoload.php';

$client = new \Goutte\Client();
$crawler = $client->request("GET", "http://www.lostiempos.com");

$crawler->filter('.views-field-title a')->each(function ($node) {
//    echo $node->text() . "\n";
    print_r($node);
});