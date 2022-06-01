<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == "contact"){

            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'required',
        ];

    }

    public function attributes(){
        return[
            'name' => '名前',
            'mail' => 'メールアドレス' 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attributeを入力してください',
            'mail.required' => ':attributeを入力してください'
        ];
    }
}
