<?php

namespace App\Repos;

class Demo
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function billings()
    {
        return $this->user;
    }
}
