<?php

namespace Programmerzamannow\Belajar;

class Customer {
    public function __construct(private string $name) {

    }

    public functio sayHello(string $name) {
        echo "Hello $name, my name is $this->name" . PHP_EOL;
    }
}