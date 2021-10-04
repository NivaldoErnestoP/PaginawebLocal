<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\tiendas;
class ValidarFormularioRequest extends FormRequest
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
            'name'=>'required|min:2|max:30',
            'email'=>'required|email|unique:tienda',
            'phone'=>'required',
            'message'=>'required'
          
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Complete este campo',
            'name.min'=>'Tiene que tener más de dos caracteres',
            'name.max'=>'Ingrese un nombre valido',

            'email.required'=>'Complete este campo',
            'email.email'=>'Ingrese un Gmail valido',
            'email.unique'=>'Ya existe este Gmail',

             'phone.required'=>'Complte este campo',

            'message.required'=>'Complete este campo',

            'envio'=>'Mensaje Enviado'

        ];
    }



    public function attributes()
    {
        return [
            'name' => 'Nombre de usuario',
            'email' => 'Email de usuario',
            'phone' => 'Telefono de usuario',
            'message' => 'Mensaje de usuario',
            
        ];
        
    }

}
