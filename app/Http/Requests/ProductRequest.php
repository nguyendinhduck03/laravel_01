<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity'=> 'required|numeric|min:0', 
            'price'=> 'required|max:999999999',
            'day_add'=> 'required|date',
            'description'=> 'required|max:999',
            'category_id'=> 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Tên không để trống',
            'name.max' => 'Tên Không dài quá 255 ký tự',
            'images.*.image' => 'Mỗi tệp phải là một hình ảnh.',
            'images.*.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, gif, hoặc svg.',
            'images.*.max' => 'Mỗi ảnh không được vượt quá 2MB.',
            'quantity.required'=> 'Số lượng không để trống', 
            'quantity.numeric'=> 'Nhập vào số', 
            'quantity.min'=> 'Số lượng ko hợp lệ', 
            'price.required'=> 'Giá không để trống',
            'price.max'=> 'Giá không quá 999.999.999đ',
            'day_add.required'=> 'Ngày nhập không để trống',
            'day_add.date'=> 'Nhập đúng định dạng ngày tháng',
            'description.required'=> 'Mô tả không để trống',
            'description.max'=> 'Mô tả không dài quá 999 ký tự',
            'category_id.required'=> 'Vui lòng chọn danh mục',
        ];
    }
}
