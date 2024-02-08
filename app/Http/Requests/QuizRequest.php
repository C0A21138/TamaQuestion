<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:32',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'problem_statement' => 'required|max:255',
            'answer_1' => 'required|max:32',
            'answer_2' => 'required|max:32',
            'answer_3' => 'required|max:32',
            'answer_4' => 'required|max:32',
            'correct_answer_num' => 'required|integer|between:1,4',
            'explanation' => 'required|max:255',
            'category' => 'required|max:32',
        ];
    }
}
