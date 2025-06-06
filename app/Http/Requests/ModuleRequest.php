<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleRequest extends FormRequest
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
            "course_id" => "required|integer|exists:courses,id",
            "name" => "required|string|max:255",
            "desc" => "required|string",
            "materials" => "required|array",
            "materials.*" => "required|file|mimes:pdf|max:10024",
        ];
    }
}
