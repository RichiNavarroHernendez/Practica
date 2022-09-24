<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionContoller extends Controller
{
    //
    public function mostrarDivision(Request $request){    

        $request->validate([
            'Numero1'=>'required',
            'Numero2'=>'required'
        ]);
        $elemento1=$request->Numero1;
        $elemento2=$request->Numero2;
        
        return redirect()->route('division')->with('success','El resultado es: '.$elemento1/$elemento2);
     }

    public function vistaDivision(){
        return view('formularios.division');
     }
}
