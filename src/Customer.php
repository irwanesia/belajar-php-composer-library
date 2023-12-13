<?php

namespace Irwanesia\Belajar;

class Customer
{
    public function __construct(private string $name)
    {

    }

    public function sayHello(string $name="GUEST"): string
    {
        return "Hello $name, my name is $this->name";
    }
}