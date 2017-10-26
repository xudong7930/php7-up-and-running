<?php
declare(strict_types=1);

class User {}

// 声明返回类型为User实例
function getUser() :User {
    // return [];
    return new User;
}

function isValid() :bool {
    return true;
}

var_dump(getUser());
var_dump(isValid());
