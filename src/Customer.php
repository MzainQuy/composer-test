<?php 
namespace Mzainquy\Belajar;

class Customer 
{
   
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "GUEST"): string
    {
        return "Hello $name, My Name is $this->name";
    }
}

