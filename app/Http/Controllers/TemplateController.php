<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function template1()
    {
        return view('formato1');
    }
    
    public function template2()
    {
        return view('formato2');
    }

    public function template3()
    {
        return view('formato3');
    }

    public function template4()
    {
        return view('formato4');
    }

    public function template5()
    {
        return view('formato5');
    }
    
    public function template6()
    {
        return view('formato6');
    }
}
