<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function add()
    {
        $about = AboutUs::first();
        return view('admin.about.add', compact('about'));
    }

    public function store(Request $request)
    {
        $about = AboutUs::first();

        if (!$about) {
            $about = new AboutUs();
        }

        $about->title = $request->title;
        $about->sub_title = $request->sub_title;
        $about->description = $request->description;

        if ($request->image != null) {
            if ($about->image && file_exists(env('ASSETPATHURL') . 'admin/images/about/' . $about->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/about/' . $about->image);
            }
            $filename = 'about-' . uniqid() . '.' . $request->image->Extension();
            $request->image->move(env('ASSETPATHURL') . 'admin/images/about', $filename);
            $about->image = $filename;
        }

        $about->save();
        return redirect(route('admin.about.add'))->with('success', 'About Us Updated Successfully!');
    }
}
