<?php

namespace App\Models;

use App\Enums\BlogPostSource;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
  protected $fillable = ['title', 'body', 'source'];

  protected $casts = [
    'source' => BlogPostSource::class,
  ];
}
