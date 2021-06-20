<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index()
    {
        var_dump("ça fonctionne");
        die();
    }

    public function test(Request $request)
    {
        $age = $request->query->get('age', 0);

        return new Response("Vous avez $age ans");
    }
}