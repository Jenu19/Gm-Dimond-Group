<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projectsdata = Project::orderByDesc('id')->get();
        return view('admin.project.index', compact('projectsdata'));
    }

    public function add()
    {
        return view('admin.project.add');
    }

    public function store(Request $request)
    {
        foreach ($request->image as $img) {
            $image = 'project-' . uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move(env('ASSETPATHURL') . 'admin/images/project', $image);
            $project = new Project();
            $project->title = $request->title;
            $project->sub_title = $request->sub_title;
            $project->location = $request->location;
            $project->description = $request->description;
            $project->image = $image;
            $project->save();
        }
        return redirect(route('admin.project.index'))->with('success', 'Project Added Successfully!');
    }

    public function edit(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        if ($request->image != null) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/project/' . $project->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/project/' . $project->image);
            }
            $filename = 'project-' . uniqid() . '.' . $request->image->Extension();
            $request->image->move(env('ASSETPATHURL') . 'admin/images/project', $filename);
            $project->image = $filename;
        }
        $project->title = $request->title;
        $project->sub_title = $request->sub_title;
        $project->location = $request->location;
        $project->description = $request->description;
        $project->save();
        return redirect(route('admin.project.index'))->with('success', 'Project Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        if ($project) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/project/' . $project->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/project/' . $project->image);
            }
            $project->delete();
            return 1;
        } else {
            return 0;
        }
    }

    public function status(Request $request)
    {
        $projectsdata = Project::where('id', $request->id)->update(['is_available' => $request->status]);
        if ($projectsdata) {
            return 1;
        } else {
            return 0;
        }
    }
}
