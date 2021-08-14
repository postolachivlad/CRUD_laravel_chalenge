<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => [
                'min:4', 
                'max:150', 
                'required',
                ],
            'content' => 'min:4|required', 
        ];

        if (!empty($this->article)) {
            $rules['title'][] = Rule::unique('articles')->ignore($this->article->id);
        } else {
            $rules['title'][] = Rule::unique('articles');
        }

        return $rules;
    }
}
