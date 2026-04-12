<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->belongsTo
    }
}
