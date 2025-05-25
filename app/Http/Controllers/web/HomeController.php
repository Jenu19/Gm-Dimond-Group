<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home');
    }

    public function about()
    {
        return view('web.about');
    }

    public function project()
    {
        return view('web.project');
    }

    public function careers()
    {
        return view('web.careers');
    }

    public function event()
    {
        return view('web.event');
    }
}
