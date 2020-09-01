<?php

namespace App;

class Test
{
    public $text;

    public function __construct()
    {
        $this->text = "Hello, current time is " . date("H:i");
    }

    public function __toString()
    {
        return $this->text;
    }
}