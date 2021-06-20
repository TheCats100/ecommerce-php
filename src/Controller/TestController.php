<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class TestController
{
    public function index()
    {
        var_dump("ça fonctionne");
        die();
    }

    public function test()
    {
        $request = Request::createFromGlobals();
        $age = $request->query->get('age', 0);

        dd("Vous avez $age ans");
    }
}