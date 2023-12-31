<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Это поле должно быть строкой',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Это поле должно быть строкой',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.file' => 'Это поле должно быть файлом',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Это поле должно быть файлом',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'Id категории должно быть числом',
            'category_id.exists' => 'Id категории должно существовать',
            'tag_ids.array' => 'Это поле должно быть массивом',
            'tag_ids.required' => 'Это поле необходимо для заполнения',

        ];
    }
}
