<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //
    public function index()
    {
        $name = 'elephant';
        $age = '27';
        return view('sites.hello',compact('name','age'));
    }
}
