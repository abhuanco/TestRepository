<?php
$replace_service = function ($callback, $option) {
    $file = file_get_contents("https://google.com");

    return $callback($file, $option);
};

$replace_service(function ($data, $option) {
    findText($data);
}, 'Services Common');


function findText($html)
{
    $dom = new DOMDocument('1.1', 'UTF-8');
    $dom->loadHTML($html);

    $xpath = new DOMXPath($dom);
    $routes = $xpath->query("//*/p");

    print_r($routes);

}