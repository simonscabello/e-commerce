<?php

namespace App\Services;

use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FileService
{
    public function uploadFile($data, $path): File
    {
        $uploaded_file = $data->file;
        $str_random = Str::random(10);

        $originalName = Str::replace(' ', '', $uploaded_file->getClientOriginalName());

        $file = new File();
        $file->name = uniqid();
        $file->original_name = $originalName;
        $file->mime_type = $uploaded_file->getMimeType();

        $url = '';
        if (config('filesystems.default') == 'public') {
            $url = config('filesystems.disks.public.url');
        } else {
            $url = config('filesystems.disks.s3.url');
        }

        $file->url = $url
            . $path . '/'
            . $str_random  . '_'
            . $originalName;

        $file->path = $path . '/'
            . $str_random  . '_'
            . $originalName;

        $file->size = $uploaded_file->getSize();

        $file->save();

        Storage::putFileAs($path, $uploaded_file, $str_random . '_' . $originalName);

        return $file;
    }
}
