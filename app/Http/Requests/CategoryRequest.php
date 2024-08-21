<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'description'=> 'required|max:999',
        ];
    }


    public function messages() {
        return [
            'name.required' => 'Bắt buộc nhập tên sản phẩm',
            'name.max' => 'Tên không quá 255 ký tự',
            'description.required'=> 'Mô tả không được để trống',
            'description.max'=> 'Mô tả không quá 999 ký tự',
        ];
    }
}
