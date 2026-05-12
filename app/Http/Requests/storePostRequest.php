<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|unique:posts|max:255',
             'description'=>'required|max:255',
             'category_id'=>'required',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'A name is required',
            'description.required'=>'A description is required',
        ];
    }
}
