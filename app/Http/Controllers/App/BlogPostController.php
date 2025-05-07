<?php

namespace App\Http\Controllers\App;

use App\DTOs\BlogPostDto;
use App\Enums\BlogPostSource;
use App\Http\Requests\App\BlogPostRequest;
use App\Http\Resources\App\BlogPostResource;
use App\Models\BlogPost;
use App\Services\Blog\BlogPostService;

class BlogPostController
{
  public function __construct(protected BlogPostService $service)
  {
  }

  public function store(BlogPostRequest $request): BlogPostResource
  {
    $post = $this->service->store(
      BlogPostDto::fromAppRequest($request),
    );

    return BlogPostResource::make($post);
  }

  public function update(BlogPostRequest $request, BlogPost $post): BlogPostResource
  {
    $post = $this->service->update(
      BlogPostDto::fromAppRequest($request),
      $post,
    );

    return BlogPostResource::make($post);
  }
}
