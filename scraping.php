<?php
require_once 'vendor/autoload.php';

$client = new \Goutte\Client();
$crawler = $client->request("GET", "https://www.spadam.se");

$crawler->filter('a')->each(function ($node) {
    echo $node->text() . "\n";
});