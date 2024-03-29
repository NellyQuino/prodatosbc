<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompromisoRequest extends FormRequest
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
            'Buscador'      => 'required|mimes:zip,rar,7z'
        ];
    }
}
