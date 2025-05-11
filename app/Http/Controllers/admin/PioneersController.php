<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pioneers;
use Illuminate\Http\Request;

class PioneersController extends Controller
{
    public function index()
    {
        $pioneersdata = Pioneers::orderByDesc('id')->get();
        return view('admin.pioneers.index', compact('pioneersdata'));
    }

    public function add()
    {
        return view('admin.pioneers.add');
    }

    public function store(Request $request)
    {
        foreach ($request->image as $img) {
            $image = 'pioneers-' . uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move(env('ASSETPATHURL') . 'admin/images/pioneers', $image);
            $pioneers = new Pioneers();
            $pioneers->image = $image;
            $pioneers->save();
        }
        return redirect(route('admin.pioneers.index'))->with('success', 'Pioneers Added Successfully!');
    }

    public function edit(Request $request)
    {
        $pioneers = Pioneers::where('id', $request->id)->first();
        return view('admin.pioneers.edit', compact('pioneers'));
    }

    public function update(Request $request)
    {
        $pioneers = Pioneers::where('id', $request->id)->first();
        if ($request->image != null) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/pioneers/' . $pioneers->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/pioneers/' . $pioneers->image);
            }
            $filename = 'pioneers-' . uniqid() . '.' . $request->image->Extension();
            $request->image->move(env('ASSETPATHURL') . 'admin/images/pioneers', $filename);
            $pioneers->image = $filename;
        }
        $pioneers->save();
        return redirect(route('admin.pioneers.index'))->with('success', 'Pioneers Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $pioneers = Pioneers::where('id', $request->id)->first();
        if ($pioneers) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/pioneers/' . $pioneers->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/pioneers/' . $pioneers->image);
            }
            $pioneers->delete();
            return 1;
        } else {
            return 0;
        }
    }

    public function status(Request $request)
    {
        $pioneersdata = Pioneers::where('id', $request->id)->update(['is_available' => $request->status]);
        if ($pioneersdata) {
            return 1;
        } else {
            return 0;
        }
    }
}
