<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaContoller extends Controller
{
    public function mostrarDatos(Request $request){    

        $request->validate([
            'Numero1'=>'required',
            'Numero2'=>'required'
        ]);
        $elemento1=$request->Numero1;
        $elemento2=$request->Numero2;
        
        return redirect()->route('suma')->with('success','El resultado es: '.$elemento1+$elemento2);
     }

    public function vistaSuma(){
        return view('formularios.suma');
     }
}
