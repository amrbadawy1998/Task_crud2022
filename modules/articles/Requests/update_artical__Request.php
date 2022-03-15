<?php

namespace modules\articles\Requests;

use Illuminate\Foundation\Http\FormRequest;

class update_article__Request extends FormRequest
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
            "title" =>  'required|unique:articles,title,'.request()->id,
            "body"=>'required|',
            'category_id'=>'required|exists:categories,id',
        ];
    }
}
