<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'quiz_id'           => [
                'required', 'integer',
            ],
            'title'             => [
                'required', 'string', 'min:3', 'max:120',
            ],
            'answers'           => [
                'required', 'string', 'min:3', 'max:120',
            ],
            'right_answer'       => [
                'required', 'string', 'min:3', 'max:30',
            ],
            'score'             => [
                'required', 'integer',
            ],
        ];
    }
}
