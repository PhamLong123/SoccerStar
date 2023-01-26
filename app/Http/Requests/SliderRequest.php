<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'slider_image '=> 'required',
            // 'product_id '=> 'equired',
            // 'numerical_order '=> 'Required'
        ];
    }

    public function messages()
    {
        return [
            // 'slider_image.required'=>'Images cannot be blank',
            // 'product_id.required'=>' ID product cannot be blank',
            // 'numerical_order.required'=>'Numerical order cannot be blank'
        ];
    }
}
