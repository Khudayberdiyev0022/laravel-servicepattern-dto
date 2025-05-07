<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
          'payload.post.title'  => ['required', 'max:255'],
          'payload.post.body'   => ['required', 'max:1000'],
        ];
    }
}
