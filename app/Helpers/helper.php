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
        return $path;
    }
}
