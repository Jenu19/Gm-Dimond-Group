<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $eventsdata = Event::orderByDesc('id')->get();
        return view('admin.event.index', compact('eventsdata'));
    }

    public function add()
    {
        return view('admin.event.add');
    }

    public function store(Request $request)
    {
        foreach ($request->image as $img) {
            $image = 'event-' . uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move(env('ASSETPATHURL') . 'admin/images/event', $image);
            $event = new Event();
            $event->title = $request->title;
            $event->sub_title = $request->sub_title;
            $event->image = $image;
            $event->save();
        }
        return redirect(route('admin.event.index'))->with('success', 'Event Added Successfully!');
    }

    public function edit(Request $request)
    {
        $event = Event::where('id', $request->id)->first();
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request)
    {
        $event = Event::where('id', $request->id)->first();
        if ($request->image != null) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/event/' . $event->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/event/' . $event->image);
            }
            $filename = 'event-' . uniqid() . '.' . $request->image->Extension();
            $request->image->move(env('ASSETPATHURL') . 'admin/images/event', $filename);
            $event->image = $filename;
        }
        $event->title = $request->title;
        $event->sub_title = $request->sub_title;
        $event->save();
        return redirect(route('admin.event.index'))->with('success', 'Event Updated Successfully!');
    }

    public function delete(Request $request)
    {
        $event = event::where('id', $request->id)->first();
        if ($event) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/event/' . $event->image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/event/' . $event->image);
            }
            $event->delete();
            return 1;
        } else {
            return 0;
        }
    }

    public function status(Request $request)
    {
        $eventsdata = Event::where('id', $request->id)->update(['is_available' => $request->status]);
        if ($eventsdata) {
            return 1;
        } else {
            return 0;
        }
    }
}
