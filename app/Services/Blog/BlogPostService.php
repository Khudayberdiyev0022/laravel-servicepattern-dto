<?php

namespace App\Services\Blog;

use App\DTOs\BlogPostDto;
use App\Enums\BlogPostSource;
use App\Models\BlogPost;

class BlogPostService
{
  public function store(BlogPostDto $dto)
  {
    return BlogPost::query()->create([
      'title'  => $dto->title,
      'body'   => $dto->body,
      'source' => $dto->source,
    ]);
  }

  public function update(BlogPostDto $dto, BlogPost $post): bool
  {
    return $post->update([
      'title'  => $dto->title,
      'body'   => $dto->body,
      'source' => $dto->source,
      'updated_at' => now(),
    ]);
  }
}
