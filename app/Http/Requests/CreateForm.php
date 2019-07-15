<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateForm extends FormRequest
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
            'name'    => 'required',
            'mail'   => 'required|email',
            'zip01' => 'required',
            'pref01' => 'required',
            'addr01' => 'required',
            'addr0' => 'required',
            'build' => 'required',
        ];
    }
    public function attributes()
{
    return [
            'name'    => '名前',
            'mail'   => 'メール',
            'zip01' => '郵便番号',
            'pref01' => '都道府県',
            'addr01' => '市区町村',
            'addr0' => '後の住所',
            'build' => 'ビル、マンション',
    ];
}

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }

    /**
     * Set custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'    => 'お名前',
            'email'   => 'メールアドレス',
            'subject' => '件名',
            'content' => '内容',
        ];
    }
}
}
