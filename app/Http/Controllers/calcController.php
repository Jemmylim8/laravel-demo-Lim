<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcController extends Controller
{
    public function showCalculatorPage()
    {
        return view('mypages.calculator');
    }
}
