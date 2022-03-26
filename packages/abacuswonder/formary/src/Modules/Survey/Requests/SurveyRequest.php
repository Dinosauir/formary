<?php

namespace AbacusWonder\Formary\Modules\Survey\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            ''
        ];
    }
}
