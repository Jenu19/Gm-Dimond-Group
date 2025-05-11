<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\JobOpening;
use Illuminate\Http\Request;

class JobOpeningController extends Controller
{
    public function index()
    {
        $job_openingsdata = JobOpening::orderByDesc('id')->get();
        return view('admin.job_opening.index', compact('job_openingsdata'));
    }

    public function add()
    {
        return view('admin.job_opening.add');
    }

    public function store(Request $request)
    {
        $job_opening = new JobOpening();
        $job_opening->title = $request->title;
        $job_opening->description = $request->description;
        $job_opening->save();
        return redirect(route('admin.job_opening.index'))->with('success', 'Job Opening Added Successfully!');
    }

    public function edit(Request $request)
    {
        $job_opening = JobOpening::where('id', $request->id)->first();
        return view('admin.job_opening.edit', compact('job_opening'));
    }

    public function update(Request $request)
    {
        $job_opening = JobOpening::where('id', $request->id)->first();
        $job_opening->title = $request->title;
        $job_opening->description = $request->description;
        $job_opening->save();
        return redirect(route('admin.job_opening.index'))->with('success', 'Job Opening Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $job_opening = JobOpening::where('id', $request->id)->first();
        if ($job_opening) {
            $job_opening->delete();
            return 1;
        } else {
            return 0;
        }
    }

    public function status(Request $request)
    {
        $job_openingsdata = JobOpening::where('id', $request->id)->update(['is_available' => $request->status]);
        if ($job_openingsdata) {
            return 1;
        } else {
            return 0;
        }
    }
}
