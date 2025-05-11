<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogdata = Blog::orderByDesc('id')->get();
        return view('admin.blog.index', compact('blogdata'));
    }

    public function add()
    {
        return view('admin.blog.add');
    }

    public function store(Request $request)
    {
        $filename = 'blog-' . uniqid() . '.' . $request->image->Extension();
        $request->image->move(env('ASSETPATHURL') . 'admin/images/blog', $filename);
        $blog = new Blog();
        $blog->image = $filename;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->save();
        return redirect(route('admin.blog.index'))->with('success', 'Blog Added Successfully!');
    }

    public function edit(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        if ($request->image != null) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/blog/' . $blog->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/blog/' . $blog->image);
            }
            $filename = 'blog-' . uniqid() . '.' . $request->image->Extension();
            $request->image->move(env('ASSETPATHURL') . 'admin/images/blog', $filename);
            $blog->image = $filename;
        }
        if ($request->title != $blog->title) {
            $blog->slug = Str::slug($request->title);
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect(route('admin.blog.index'))->with('success', 'Blog Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        $blogdata = Blog::where('id', $request->id)->delete();
        if ($blogdata) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/blog/' . $blog->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/blog/' . $blog->image);
            }
            return 1;
        } else {
            return 0;
        }
    }

    public function status(Request $request)
    {
        $blogdata = Blog::where('id', $request->id)->update(['is_available' => $request->status]);
        if ($blogdata) {
            return 1;
        } else {
            return 0;
        }
    }
}
