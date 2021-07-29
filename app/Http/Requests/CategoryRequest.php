<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'bail|required|min:10|max:255|unique:App\Models\Category',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'name.min' => 'Tên chuyên mục ít nhất từ 10 ký tự',
            'name.max' => 'Tên chuyên mục không vượt quá 255 ký tự',
            'name.unique' => 'Tên chuyên mục đã tồn tại'
        ];
    }
}
