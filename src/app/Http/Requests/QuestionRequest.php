<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'problem' => 'required',
            'bottle-neck' => 'required',
            'screenshot' => 'required',
            'effort' => 'required',
            'link' => 'required',
            'file-name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'problem.required' => '起きている問題を入力してください',
            'bottle-neck.required' => '詰まっている内容を入力してください',
            'screenshot.required' => 'エラー内容を入力してください',
            'effort.required' => '施策を入力してください',
            'link.required' => 'GitHubのリンクを入力してください',
            'file-name.required' => 'ファイル名を入力してください',
        ];
    }
}
