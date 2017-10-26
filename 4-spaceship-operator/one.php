<?php
declare(strict_types=1);

$games = ['Call of duty', 'Mass Effect', 'Ghost', 'Mordern warefare', 'Advanced Warefare'];

usort($games, function ($a, $b) {
    echo 'a='.$a.'; b='.$b.PHP_EOL;
    return strlen($b) <=> strlen($a); // -1, 0, 1
});

var_dump($games);
