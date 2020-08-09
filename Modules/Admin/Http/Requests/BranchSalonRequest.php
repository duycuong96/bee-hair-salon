<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchSalonRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'thumb_img' => 'required|min:2|image',
            'name' => 'required|min:2',
            'thumb_img' => 'required',
            'content' => 'min:10',
            // 'work_time' => 'required',
            'address' => 'required',
            'phone' => 'required|min:10'
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ":attribute quá ngắn",
            'image' => ":attribute không phải là ảnh",
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên salon',
            'thumb_img' => 'Ảnh salon',
            'content' => 'Giới thiệu salon',
            'work_time' => 'Thời gian hoạt động của salon',
            'address' => 'Địa chỉ của salon',
            'phone' => 'Số điện thoại'
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
