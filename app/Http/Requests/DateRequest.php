<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateRequest extends FormRequest {

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            "from" => 'required|date',
            "to" => 'required|date|after_or_equal:from'
        ];
    }

    public function authorize()
    {
        return true;
    }

}