<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name'=>'required|min:2| max:30',
            'email'=>'required| max:30',
            'phone'=>'required| max:30',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'Поле "Имя" не заполнено!',
            'email.required'=>'Поле "Email" не заполнено!',
            'phone.required'=>'Поле "Тедефон" не заполнено!',
        ];
    }
}
