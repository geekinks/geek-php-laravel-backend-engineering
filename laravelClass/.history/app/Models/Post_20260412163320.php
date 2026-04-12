<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        "user_id",
        "category_id",
        "title",
        "content",
        "mobile_number"
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function user()
    {
        return $this->belongTo(User::class);
    }
}
