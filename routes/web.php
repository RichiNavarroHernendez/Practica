<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaContoller;
use App\Http\Controllers\SumaContoller;
use App\Http\Controllers\MultiplicacionContoller;
use App\Http\Controllers\DivisionContoller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('datos');
})->name('oper');

Route::get('formularios.resta',[RestaContoller::class,'vistaResta'])->name('resta');
Route::post('formularios.resta', [RestaContoller::class,'mostrarResta'])->name('resta');

Route::get('formularios.multiplicacion',[MultiplicacionContoller::class,'vistaMultiplicacion'])->name('multiplicacion');
Route::post('formularios.multiplicacion', [MultiplicacionContoller::class,'mostrarMultiplicacion'])->name('multiplicacion');

Route::get('formularios.division',[DivisionContoller::class,'vistaDivision'])->name('division');
Route::post('formularios.division', [DivisionContoller::class,'mostrarDivision'])->name('division');

Route::get('formularios.suma',[SumaContoller::class,'vistaSuma'])->name('suma');//ruta para conexion a otro php

Route::post('formularios.suma', [SumaContoller::class,'mostrarDatos'])->name('suma');
