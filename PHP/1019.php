<?php

function secondsToMinutes($seconds):int
{
    return floor(intval($seconds)/60);
}

function minutesToHours($minutes): int
{
    return secondsToMinutes($minutes);
}

function getTime($seconds){
    $minutes = secondsToMinutes($seconds);
    $seconds -= $minutes * 60;
    $hours = minutesToHours($minutes);
    $minutes -= $hours * 60;
    return [$hours, $minutes, $seconds];
}

$seconds = floatval(readline());
$time = getTime($seconds);

echo $time[0] . ':' . $time[1] . ':' . $time[2] . PHP_EOL;
