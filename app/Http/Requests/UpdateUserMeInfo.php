<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateUserMeInfo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->id != $this->user()->id
            || !Hash::check($this->password, $this->user()->password)) {
            return false;
        }

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
            'person.entity.name' => 'required|max:255',
            'user_name' => 'required|max:255|unique:users,user_name,'.$this->user()->id,
            'person.entity.email' => [
                'required',
                'email',
                'max:255',
                'uniqueIfExternalCondition:entities,users,entities.entitable_type like "%Person%" and entities.entitable_id = users.person_id,'.$this->user()->id
            ],
            'password' => 'required|min:6'
        ];
    }
}
