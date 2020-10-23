<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        //echo $this->$name;
        echo $name . "<br>";
        echo $npm . "<br>";
    }
    public function show()
    {
        echo "fadhil" . "<br>";
        echo "1817051062";
    }
}
