<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicacionContoller extends Controller
{
    //
    public function mostrarMultiplicacion(Request $request){    

        $request->validate([
            'Numero1'=>'required',
            'Numero2'=>'required'
        ]);
        $elemento1=$request->Numero1;
        $elemento2=$request->Numero2;
        
        return redirect()->route('multiplicacion')->with('success','El resultado es: '.$elemento1*$elemento2);
     }

    public function vistaMultiplicacion(){
        return view('formularios.multiplicacion');
     }
}
