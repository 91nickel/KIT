<?php
/**
 * Copyright Maxim Bykovskiy © 2018.
 */

/**
 * Created by PhpStorm.
 * User: sherh
 * Date: 27.09.2018
 * Time: 10:47
 */

function prnt($var)
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

$array = Array(
    Array(
        "name" => "test1",
        "date" => "17.05.2018 18:46:18"
    ),
    Array(
        "name" => "test2",
        "date" => "17.05.2018 18:32:45"
    ),
    Array(
        "name" => "test3",
        "date" => "18.06.2018 18:00:16"
    ),
    Array(
        "name" => "test4",
        "date" => "18.06.2018 18:00:15"
    ),
);

$newArray = [];

foreach ($array as $element) {
    $format = 'd.m.Y H:i:s';
    $date = DateTime::createFromFormat($format, $element['date']);
    $date = $date->format('U') . "\n";
    $newArray[] = array('name' => $element['name'], 'date' => $date);
}

$cicleLength = count($newArray);

$sortArray = [];

for ($j = 0; $j < $cicleLength; $j++) {
    $maxValue = 0;
    for ($i = 0; $i <= count($newArray); $i++) {
        if (intval($newArray[$i]['date']) > intval($maxValue['date'])) {
            $maxValue = $newArray[$i];
            $maxIndex = $i;
        }
    }
    $sortArray[] = $newArray[$maxIndex];
    unset($newArray[$maxIndex]);
}

foreach ($sortArray as $key => $element) {
    $format = 'U';
    $date = date('Y.m.d H:i:s', (int)$element['date']);
    $sortArray[$key]['date'] = $date;
    echo $sortArray[$key]['name'] . ' от ' . $sortArray[$key]['date'] . "<br />";
}

prnt($sortArray);