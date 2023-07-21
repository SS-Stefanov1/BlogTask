<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    #use HasFactory;

    protected $fillable = ['title', 'description', 'image_path', 'slug', 'user_id'];
}
