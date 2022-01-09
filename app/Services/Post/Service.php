<?php

namespace App\Services\Post;

use Illuminate\Http\UploadedFile;

class Service
{
    public function saveImage(UploadedFile $image)
    {
        
         $image_name = $image->getClientOriginalName();
         $image->move(public_path('assets/images'),$image_name);

         return $image_name;
    }
}