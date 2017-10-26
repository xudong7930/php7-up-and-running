<?php
// 使用严格的类型
declare(strict_types=1);

function setAge(int $age) {
    var_dump($age);
}

function setIsValid(bool $valid) {
    var_dump($valid);
}

setAge(1);
setIsValid(true);

