<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
  public function authorize(): bool
  {
    return false;
  }

  public function rules(): array
  {
    return [
      'title'  => ['required', 'max:255'],
      'body'   => ['required', 'max:1000'],
    ];
  }
}
