<?php
class User {
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function name()
    {
        return $this->name;
    }

    public function age()
    {
        return $this->age;
    }
}

class UserCollection {
    private $users;

    public function __construct(array $user)
    {
        $this->users = $user;
    }

    public function sortBy($column)
    {
        usort($this->users, function ($a, $b) use ($column) {
            return $a->$column() <=> $b->$column();
        });
    }

    public function users()
    {
        return $this->users;
    }
}

$collection = new UserCollection([
    new User('Susie', 20),
    new User('Mary', 24),
    new User('Jeff', 30),
    new User('Jane', 26),
    new User('Talor', 10)
    ]);
$collection->sortBy('age');

var_dump($collection->users());
