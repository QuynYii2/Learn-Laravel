<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'name' => 'bail|required|min:10|max:255|unique:App\Models\Post',
            'content' => 'bail|required|min:10|max:255',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'name.min' => 'Tên chuyên mục ít nhất từ 10 ký tự',
            'name.max' => 'Tên chuyên mục không vượt quá 255 ký tự',
            'name.unique' => 'Tên chuyên mục đã tồn tại',
            'content.required' => 'Nội dung không được để trống',
            'content.min' => 'Nội dung ít nhất từ 10 ký tự',
            'content.max' => 'Nội dung không vượt quá 255 ký tự',
            'status.required' => 'Trạng thái không được để trống',
        ];
    }
}
