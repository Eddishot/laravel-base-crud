<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyComic extends Model
{
    // protected $table = "comic";
    protected $fillable =[
        "title", 
        // "description", 
        // "price",
        "series",
    ];
}
