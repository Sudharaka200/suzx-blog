<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'all_posts'; // Optional if your table is not 'posts'

    protected $fillable = [
        'img_url1',
        'title1',
        'description1',
    ];
}
