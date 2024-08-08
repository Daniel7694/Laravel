<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5 | max:255',
            'slug' => 'required|unique:post',
            'content' => 'required',
            'category' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'The :attribute field is required. (edited)',
            'title.min' => 'The :attribute must be at least 5 characters long. (edited)',
            'title.max' => 'The :attribute must be a maximum of 255 characters long. (edited)',
            'slug.required' => 'The :attribute field is required. (edited)',
            'slug.unique' => 'The :attribute must be unique. (edited)',
            'content.required' => 'The :attribute field is required. (edited)',
            'category.required' => 'The :attribute field is required. (edited)'
        ];
    }

    public function attributes(){
        return [
            'title' => 'Título',
           'slug' => 'Slug',
            'content' => 'Contenido',
            'category' => 'Categoría'
        ];
    
}
}
