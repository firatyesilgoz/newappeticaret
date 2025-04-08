<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
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
            'name'=>'required|string|min:5',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' =>'İsim Soyisim zorunlu',
            'name.string' =>'İsim Soyisim karakterlerden oluşmalı',
            'name.min' =>'İsim Soyisim minimum 5 karakter olmalı',
            'email.required' =>'email zorunlu',
            'email.string' =>'email dizini oluşmalı',
            'subject.required' =>'konu zorunlu',
            'message.required' =>'mesaj zorunlu',
        ];
    }
}
