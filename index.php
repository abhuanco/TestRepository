<?php
$replace_service = function ($callback, $option) {
    $file = file_get_contents("https://google.com");

    return $callback($file, $option);
};

echo $replace_service(function ($data, $option) {
    echo $data;
}, 'Services Common');