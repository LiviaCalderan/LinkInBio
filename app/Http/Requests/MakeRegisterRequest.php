<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * @property-read string $name
 * 
 * @property-read string $email
 * 
 * @property-read string $password
 */
class MakeRegisterRequest extends FormRequest
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
        # o que eu preciso ter no formulário de registro:
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'confirmed', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                Password::defaults() // aqui eu uso a regra de senha que defini no AppServiceProvider
            ],
        ];
    }

    public function tryToRegister(): bool
    {

        // Criar user:
        // Só funciona assim se houver fillable no model User:
        // Unguarded no AppServiceProvider também permite que isso funcione.
        $user = User::query()->create($this->validated());

        // caso contrário, usar o código comentado abaixo:

        /* $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save(); */

        // Logar com o user criado:
        auth()->login($user);

        return true;
    }
}
