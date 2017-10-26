<?php
declare(strict_types=1);

$name = isset($_GET['name']) ? $_GET['name'] : 'nothing';
$name2 = $_GET['name'] ?? 'nothing';
var_dump($name, $name2);
