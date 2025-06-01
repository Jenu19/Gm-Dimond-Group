<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Pioneers;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projectdata = Project::where('is_available', 1)->get();
        $pioneerdata = Pioneers::where('is_available', 1)->get();
        $eventdata = Event::where('is_available', 1)->get();
        $blogdata = Blog::where('is_available', 1)->get();
        return view('web.home', compact('projectdata', 'pioneerdata', 'eventdata', 'blogdata'));
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
