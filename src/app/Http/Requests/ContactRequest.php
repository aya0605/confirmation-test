<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required','max:255']
        ];
    }

    public function messages()
    {
        return [
        'first_name.required' => '姓を入力してください',
        'last_name.string' => '名を入力してください',
        'gender.required' => '性別を選択してください',
        'email.string' => 'メールアドレスを入力してください',
        'tel.required' => '電話番号を入力してください',
        'address.required' => '住所を入力してください',
        'content.required' => 'お問い合わせを入力してください', 
        ];
    }
}
