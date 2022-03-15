<?php

namespace modules\articles\Requests;

use Illuminate\Foundation\Http\FormRequest;

class create_article__Request extends FormRequest
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
        return [
            "title" =>  'required|unique:articles|max:255',
            "body"=>'required|',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'category_id'=>'required|',
        ];
    }
}
