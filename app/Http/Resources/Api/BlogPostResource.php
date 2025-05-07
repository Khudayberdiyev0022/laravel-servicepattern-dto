<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogPostResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id'     => $this->id,
      'title'  => $this->title,
      'body'   => $this->body,
      'source' => $this->source,
    ];
  }
}
