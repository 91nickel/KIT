<?php
/**
 * Copyright Maxim Bykovskiy © 2018.
 */

/**
 * Created by PhpStorm.
 * User: sherh
 * Date: 27.09.2018
 * Time: 10:43
 */

function prnt($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

$apiurl = "https://online.moysklad.ru/api/remap/1.1/";
$login = "admin@kit-cons1";
$password = "17c5e8b29d";