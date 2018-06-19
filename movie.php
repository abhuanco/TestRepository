<?php
require_once 'vendor/autoload.php';

$client = new \Goutte\Client();
$crawler = $client->request("GET", "http://www.cinecenter.com.bo");

$crawler->filter('a')->each(function ($node) {
    echo $node->text() . "\n";
});