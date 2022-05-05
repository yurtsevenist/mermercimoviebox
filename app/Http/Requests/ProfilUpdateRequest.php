<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilUpdateRequest extends FormRequest
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
            'name' => ['required','min:3'],
            'lastname' => ['required','min:3'],
            'email' => ['required'],
            'date' => ['required','date'],
            'gender' =>  ['required','integer'],
            'comment' => ['required','min:10']
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'İsim',
            'latname' => 'Soyisim',
            'email' => 'E-Posta',
            'date' => 'Doğum Tarihi',
            'gender' => 'Cinsiyet',
            'comment' => 'Hakkımda',
        ];
    }
}
