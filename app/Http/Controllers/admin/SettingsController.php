<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\SocialLinks;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settingsdata = Settings::first();
        $getsociallinks = SocialLinks::get();
        return view('admin.settings.index', compact('settingsdata', 'getsociallinks'));
    }

    public function savecontact(Request $request)
    {
        $setting = Settings::first();
        if (empty($setting)) {
            $setting = new Settings();
        }
        $setting->email = $request->email;
        $setting->mobile = $request->mobile;
        $setting->address = $request->address;
        $setting->save();
        return redirect()->back()->with('success', 'Setting Updated Successfully');
    }

    public function other(Request $request)
    {
        $setting = Settings::first();
        if (empty($setting)) {
            $setting = new Settings();
        }
        //about_us_page_image
        if ($request->about_us_page_image != null) {
            if ($setting->about_us_page_image && file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $setting->about_us_page_image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/other/' . $setting->about_us_page_image);
            }
            $filename = 'about_us-' . uniqid() . '.' . $request->about_us_page_image->Extension();
            $request->about_us_page_image->move(env('ASSETPATHURL') . 'admin/images/other', $filename);
            $setting->about_us_page_image = $filename;
        }
        //our_project_page_image
        if ($request->our_project_page_image != null) {
            if ($setting->our_project_page_image && file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $setting->our_project_page_image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/other/' . $setting->our_project_page_image);
            }
            $filename = 'our_project-' . uniqid() . '.' . $request->our_project_page_image->Extension();
            $request->our_project_page_image->move(env('ASSETPATHURL') . 'admin/images/other', $filename);
            $setting->our_project_page_image = $filename;
        }
        //career_page_image
        if ($request->career_page_image != null) {
            if ($setting->career_page_image && file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $setting->career_page_image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/other/' . $setting->career_page_image);
            }
            $filename = 'career-' . uniqid() . '.' . $request->career_page_image->Extension();
            $request->career_page_image->move(env('ASSETPATHURL') . 'admin/images/other', $filename);
            $setting->career_page_image = $filename;
        }
        //media_page_image
        if ($request->media_page_image != null) {
            if ($setting->media_page_image && file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $setting->media_page_image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/other/' . $setting->media_page_image);
            }
            $filename = 'media-' . uniqid() . '.' . $request->media_page_image->Extension();
            $request->media_page_image->move(env('ASSETPATHURL') . 'admin/images/other', $filename);
            $setting->media_page_image = $filename;
        }
        //blog_page_image
        if ($request->blog_page_image != null) {
            if ($setting->blog_page_image && file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $setting->blog_page_image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/other/' . $setting->blog_page_image);
            }
            $filename = 'blog-' . uniqid() . '.' . $request->blog_page_image->Extension();
            $request->blog_page_image->move(env('ASSETPATHURL') . 'admin/images/other', $filename);
            $setting->blog_page_image = $filename;
        }
        //contact_us_page_image
        if ($request->contact_us_page_image != null) {
            if ($setting->contact_us_page_image && file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $setting->contact_us_page_image)) {
                unlink(env('ASSETPATHURL') . 'admin/images/other/' . $setting->contact_us_page_image);
            }
            $filename = 'contact_us-' . uniqid() . '.' . $request->contact_us_page_image->Extension();
            $request->contact_us_page_image->move(env('ASSETPATHURL') . 'admin/images/other', $filename);
            $setting->contact_us_page_image = $filename;
        }
        $setting->save();
        return redirect()->back()->with('success', 'Setting Updated Successfully');
    }

    public function sociallinks(Request $request)
    {
        if (!empty($request->social_icon)) {
            foreach ($request->social_icon as $key => $icon) {
                if (!empty($icon) && !empty($request->social_link[$key])) {
                    $sociallink = new SocialLinks();
                    $sociallink->icon = $icon;
                    $sociallink->link = $request->social_link[$key];
                    $sociallink->save();
                }
            }
            return redirect()->back()->with('success', 'SocialLinks Added Successfully');
        }
        if (!empty($request->edit_icon_key)) {
            foreach ($request->edit_icon_key as $key => $id) {
                $sociallink = SocialLinks::find($id);
                $sociallink->icon = $request->edit_sociallink_icon[$id];
                $sociallink->link = $request->edit_sociallink_link[$id];
                $sociallink->save();
            }
            return redirect()->back()->with('success', 'SocialLinks Updated Successfully');
        }
    }

    public function deletesociallinks(Request $request)
    {
        $sociallink = SocialLinks::where('id', $request->id)->first();
        if ($sociallink) {
            $sociallink->delete();
            return 1;
        } else {
            return 0;
        }
    }
}
