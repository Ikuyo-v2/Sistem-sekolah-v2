<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis,'.$this->student->id],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BiD'],
            'class' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'NIS wajib diisi.',
            'nis.string' => 'NIS harus berupa string.',
            'nis.size' => 'NIS harus terdiri dari 4 karakter.',
            'nis.unique' => 'NIS sudah digunakan.',

            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa string.',

            'gender.required' => 'Jenis kelamin wajib diisi.',
            'gender.string' => 'Jenis kelamin harus berupa string.',
            'gender.in' => 'Jenis kelamin harus Laki-laki atau Perempuan.',

            'major.required' => 'Jurusan wajib diisi.',
            'major.string' => 'Jurusan harus berupa string.',
            'major.in' => 'Jurusan harus AKL, TKJ, atau BiD.',

            'class.required' => 'Kelas wajib diisi.',
            'class.string' => 'Kelas harus berupa string.',
        ];
    }
}
