<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class MyAccountRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = Auth::user();
        $rule =  [
            'name' => ['required','min:1','max:255'],
        ];
        if (request()->email) {
            $rule =  [
                'email' => 'required|email|unique:admin_users,email,'.$user->id,
            ];
        }
        if(request()->password || request()->password_confirmation) {
            $rule['password'] = 'required|confirmed|min:6|max:32';
        }
        return $rule;

    }

    public function attributes()
    {
        return [
            'name' => 'Tên tài khoản',
            'email' => 'Địa chỉ email',
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
