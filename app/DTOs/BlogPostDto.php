<?php

namespace App\DTOs;

use App\Enums\BlogPostSource;
use App\Http\Requests\App\BlogPostRequest as AppBlogRequest;
use App\Http\Requests\Api\BlogPostRequest as ApiBlogRequest;

readonly class BlogPostDto
{
  public function __construct(
    public string $title,
    public string $body,
    public BlogPostSource $source
  ) {
  }

  public static function fromAppRequest(AppBlogRequest $request): BlogPostDto
  {
    return new self(
      title: $request->validated('title'),
      body: $request->validated('body'),
      source: BlogPostSource::App,
    );
  }
  public static function fromApiRequest(ApiBlogRequest $request): BlogPostDto
  {
    return new self(
      title: $request->validated('payload.post.title'),
      body: $request->validated('payload.post.body'),
      source: BlogPostSource::Api,
    );
  }
}
