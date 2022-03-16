<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        "nom" =>'required',
        "prenoms"=>'required',
            'revmensuel' => "required",
            'patrimoine' => "required",
            'estimationpatrimoine' => "required",
            'numcarte' => "required",
            'assvie' => "required",
            'sexe' => "required",
            'nationalite' => "required",
            'datedenaissance' => "required",
            'profession' => "required",
            'typedepersonne' => "required",
            'telephone' => "nullable",
            'designation' => "nullable",
            'nrc' => "nullable",
            'bp' => "nullable",
        ];
    }
}
