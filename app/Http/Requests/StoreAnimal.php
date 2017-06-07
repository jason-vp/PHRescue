<?php

namespace App\Http\Requests;

use App\Cat;
use App\Dog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAnimal extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'animalable.size' => Rule::in(Dog::SIZES),
            'animalable.height' =>  'numeric|nullable',
            'animalable.length' => 'numeric|nullable',
            'animalable.coat' => Rule::in(Cat::COATS),
            'birth_date' => 'date',
            'breed.id' => 'required|integer',
            'entry_date' => 'required|date',
            'found_at_city.id' => 'integer|nullable',
            'found_at_observations' => 'string|nullable',
            'microchip_date' => 'date',
            'microchip_number' => 'string|nullable',
            'passport_number' => 'string|nullable',
            'primary_color' => 'regex:/#([a-f0-9]{3}){1,2}\b/i',
            'secondary_color' => 'regex:/#([a-f0-9]{3}){1,2}\b/i',
            'ternary_color' => 'regex:/#([a-f0-9]{3}){1,2}\b/i',
            'public_advertisement' => 'required|boolean',
            'sex' => ['required', Rule::in(['Male', 'Female'])],
            'weight' => 'numeric|nullable'
        ];
    }
}
