<?php

namespace App\Http\Requests\Consultation;

use Illuminate\Foundation\Http\FormRequest;

class ObrInvestFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" должно быть заполнено',
            'phone.required' => 'Поле "Телефон" должно быть заполнено',
            'email.required' => 'Поле "E-mail" должно быть заполнено',
            'message.required' => 'Поле "Сообщение" должно быть заполнено',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => ['required','string'],
            "phone" => ['required','string'],
            "email" => ['required','string'],
            "message" => ['required','string'],
        ];
    }
}
