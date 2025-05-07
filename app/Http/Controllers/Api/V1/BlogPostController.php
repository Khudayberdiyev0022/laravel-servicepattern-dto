<?php

namespace App\Http\Controllers\Api\V1;

use App\DTOs\BlogPostDto;
use App\Enums\BlogPostSource;
use App\Http\Requests\Api\BlogPostRequest;
use App\Http\Resources\Api\BlogPostResource;
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
      BlogPostDto::fromApiRequest($request),
    );

    return BlogPostResource::make($post);
  }

  public function update(BlogPostRequest $request, BlogPost $post): BlogPostResource
  {
    $post = $this->service->update(
      BlogPostDto::fromApiRequest($request),
      $post,
    );

    return BlogPostResource::make($post);
  }
}
