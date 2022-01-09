<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title','description','img','updated_at','category_id'];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
