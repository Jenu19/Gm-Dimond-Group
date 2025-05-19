<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class helper
{
    public static function image_path($image)
    {
        $path = url(env('ASSETPATHURL') . 'admin/images/placeholder.jpg');
        if (Str::contains($image, 'blog')) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/blog/' . $image)) {
                $path = url(env('ASSETPATHURL') . 'admin/images/blog/' . $image);
            }
        }
        if (Str::contains($image, 'pioneers')) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/pioneers/' . $image)) {
                $path = url(env('ASSETPATHURL') . 'admin/images/pioneers/' . $image);
            }
        }
        if (Str::contains($image, 'event')) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/event/' . $image)) {
                $path = url(env('ASSETPATHURL') . 'admin/images/event/' . $image);
            }
        }
        if (Str::contains($image, 'about_us') || Str::contains($image, 'our_project') || Str::contains($image, 'career') || Str::contains($image, 'media') || Str::contains($image, 'blog') || Str::contains($image, 'contact_us')) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/other/' . $image)) {
                $path = url(env('ASSETPATHURL') . 'admin/images/other/' . $image);
            }
        }
        if (Str::contains($image, 'project')) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/project/' . $image)) {
                $path = url(env('ASSETPATHURL') . 'admin/images/project/' . $image);
            }
        }
        if (Str::contains($image, 'about')) {
            if (file_exists(env('ASSETPATHURL') . 'admin/images/about/' . $image)) {
                $path = url(env('ASSETPATHURL') . 'admin/images/about/' . $image);
            }
        }
        return $path;
    }
}
