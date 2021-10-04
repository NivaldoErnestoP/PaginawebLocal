<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarFormularioRequest;
use Illuminate\Http\Request;
use App\Models\tienda;
class MainController extends Controller
{
    //post
    public function save(ValidarFormularioRequest $request){
    
        $data = new tienda();
        $data->nombre = $request->name;
        $data->email = $request->email;
        $data->telefono = $request->phone;
        $data->mensaje = $request->message;
        $data->save();
        if (!$data) {
            return back()->with('fail','Error');
        }else{
            
            return back()->with('success','Mensaje Enviado');
        }

      
    }
    //get redict
    public function show(){
    
        return view('contacto');
    }


}
