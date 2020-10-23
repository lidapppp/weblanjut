<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function show()
    {
        echo "Fadhil";
    }
    public function index($name, $npm)
    {
        echo $name . "<br>";
        echo $npm;
    }
}
