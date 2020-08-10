<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AccountRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case "POST":
                $unique = Rule::unique('admins')
                ->where(function($query) {
                    $query->where('id', '=', auth()->user()->id);
                });
                $rule['name'] = [
                    'required'
                ];
                $rule['email'] = [
                    'required',
                    'email',
                    $unique,
                ];
                $rule['password'] = [
                    'required',
                ];
            break;

            case "PUT":
                $id = request()->id;
                $unique = Rule::unique('admins')
                ->where(function ($query) use ($id) {
                    $query->where('id', '=', auth()->user()->id);
                    $query->whereNull('deleted_at');
                    $query->where('id', '<>', $id);
                });
                $rule['name'] = [
                    'required'
                ];
                $rule['email'] = [
                    'required',
                    'email',
                    $unique,
                ];
                if(request()->password) {
                    $rule['password'] = [
                        'required',
                    ];
                }
            break;
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
