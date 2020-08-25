<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterConfirm extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'regex:/^\S*$/u|not_regex:/　　/|min:6|max:32|confirmed',
        ];
    }

    public function attributes()
    {
        return [
            'password' => 'Mật khẩu',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
