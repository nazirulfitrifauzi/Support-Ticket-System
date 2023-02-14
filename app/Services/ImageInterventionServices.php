<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageInterventionServices
{
    public function saveOriginalFile($logo, $uuid)
    {
        // original extension
        $oriExt = $logo->getClientOriginalextension();
        // save original logo
        $oriImg = Image::make($logo)->stream();
        $oriPath = 'logo/' . $uuid . '.' . $oriExt;
        Storage::put('public/' . $oriPath, $oriImg);

        return $oriExt;
    }

    public function createThumbnail($logo, $uuid, $size = ['150', '100'])
    {
        $ext = $this->saveOriginalFile($logo, $uuid);
        // save thumbnail
        $thumbImg = Image::make($logo)->resize($size[0], $size[1])->stream();
        $thumbPath = 'thumbnail/' . $uuid . '.' . $ext;
        Storage::put('public/' . $thumbPath, $thumbImg);

        return $thumbPath;
    }
}