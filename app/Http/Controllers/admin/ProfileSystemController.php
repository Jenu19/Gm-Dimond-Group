<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileSystem;
use Illuminate\Http\Request;

class ProfileSystemController extends Controller
{
    public function index()
    {
        $profilesystemdata = ProfileSystem::orderByDesc('id')->get();
        return view('admin.profile_system.index', compact('profilesystemdata'));
    }
    public function add()
    {
        return view('admin.profile_system.add');
    }
    public function store(Request $request)
    {
        $profilesystem = new ProfileSystem();
        $profilesystem->title = $request->title;
        $profilesystem->system_width = $request->system_width;
        $profilesystem->save();
        return redirect(route('admin.profile_system.index'))->with('success', 'Profile System Added Successfully!');
    }
    public function edit(Request $request)
    {
        $profilesystem = ProfileSystem::where('id', $request->id)->first();
        return view('admin.profile_system.edit', compact('profilesystem'));
    }
    public function update(Request $request)
    {
        $profilesystem = ProfileSystem::where('id', $request->id)->first();
        $profilesystem->title = $request->title;
        $profilesystem->system_width = $request->system_width;
        $profilesystem->save();
        return redirect(route('admin.profile_system.index'))->with('success', 'Profile System Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $profilesystemdata = ProfileSystem::where('id', $request->id)->delete();
        if ($profilesystemdata) {
            return 1;
        } else {
            return 0;
        }
    }
    public function status(Request $request)
    {
        $profilesystemdata = ProfileSystem::where('id', $request->id)->update(['is_available' => $request->status]);
        if ($profilesystemdata) {
            return 1;
        } else {
            return 0;
        }
    }
}
