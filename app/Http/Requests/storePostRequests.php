<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequests extends FormRequest
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
            'name' => 'required|unique:posts|max:255',
            'description' => 'required',
            'category' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'A title field is required',
            'description.required' => 'A description field is required'
        ];
    }
}
