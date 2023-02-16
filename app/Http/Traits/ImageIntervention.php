<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait ImageIntervention
{
    /**
     * @param Request $request
     * @return $this|false|string
     */

    public function saveOriginalFile($logo, $uuid, $folder)
    {
        // original extension
        $oriExt = $logo->getClientOriginalextension();
        // save original logo
        $oriImg = Image::make($logo)->stream();
        $oriPath = 'original/' . $folder . '/' . $uuid . '.' . $oriExt;
        Storage::put('public/' . $oriPath, $oriImg);

        return $oriExt;
    }

    public function createThumbnail($logo, $uuid, $folder, $size = ['150', '100'],)
    {
        $ext = $this->saveOriginalFile($logo, $uuid, $folder);
        // save thumbnail
        $thumbImg = Image::make($logo);
        $thumbImg->resize($size[0], $size[1], function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $thumbImg->resizeCanvas($size[0], $size[1], 'center', false)->stream();
        $thumbPath = 'thumbnail/' . $folder . '/' . $uuid . '.' . $ext;
        Storage::put('public/' . $thumbPath, $thumbImg);

        return $thumbPath;
    }
}
