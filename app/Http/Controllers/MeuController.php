<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public function receive(Request $request)
    {
        dd($request->all());
    }
}
