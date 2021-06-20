<?php

namespace App\Controller;

class TestController
{
    public function index()
    {
        var_dump("ça fonctionne");
        die();
    }

    public function test()
    {
        dd("Page de test");
    }
}