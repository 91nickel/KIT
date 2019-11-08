<?php
/**
 * Copyright Maxim Bykovskiy © 2018.
 */

/**
 * Created by PhpStorm.
 * User: sherh
 * Date: 04.10.2018
 * Time: 14:25
 */

function prnt($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function URL($url)
{ //Реализуйте функцию
    $urlExploded = explode('?', $url);
    $link = $urlExploded[0];

    $result['query'] = $urlExploded[1];

    $result['scheme'] = explode(':', $link)[0];
    $result['host'] = explode('/', $link)[2];

    $result['path'] = '/' . implode('/', array_splice(explode('/', $link), 3));

    $params = explode('&', $result['query']);

    foreach ($params as $el) {
        $key = explode('=', $el)[0];
        $value = urldecode(explode('=', $el)[1]);
        $result[$key] = $value;
    }
    $url = $result;

    return [$url];
}

$url = "http://example.com/app.php?id=10&type=payment&status=paid&name=%D0%92%D0%B0%D1%81%D1%8F";

prnt(URL($url));