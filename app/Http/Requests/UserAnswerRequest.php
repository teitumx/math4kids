<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAnswerRequest extends FormRequest
{

    public function rules()
    {
        return [
            'number' => 'required|integer',
            'question_id' => 'required|integer',
            'answer' => 'required|string',
        ];
    }
}
