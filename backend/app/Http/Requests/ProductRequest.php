<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' =>'required|max:255',
            'name_vi' =>'required|max:255',
            'price' =>'required|max:255',
            'SKU' =>'required|max:255',
            'Slug' =>'required|max:255',
            'description1' =>'required',
            'description2' =>'required',
            'description3' =>'required',
            'category_id' =>'required|max:13',
            'image' =>'required'
        ];
    }
}
