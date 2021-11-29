<?php

namespace App\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title','description','img','updated_at'];

    public function saveImage(UploadedFile $image)
    {
         $destination_path = "public/assets/img_posts";
         $image_name = $image->getClientOriginalName();
         $image->storeAs($destination_path,$image_name);

         return $image_name;
    }
}
