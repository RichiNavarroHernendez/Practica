@extends('app')
@section('content')
<div class="container-fluid bg-blue-100">
    <div class="mt-10 max-w-2xl mx-auto text-center space-y-3">
        <h1 class="text-4xl font-extrabold text-indigo-600 mb-10" >
            Ejemplo de FRAMEWORK con LARAVEL
        </h1>       
    </div>
    <div class="row d-flex justify-content-center align-items-center h-50">
    <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="{{asset('imagenes/inicio.jpg')}}"
          class="img-fluid" alt="Sample image">
    </div>
    <div class="mt-10 max-w-2xl mx-auto shadow bg-white p-10 text-base text-center">
          Practicar con LARAVEL de un proyecto con las operaciones aritmeticas
    </div>
    </div>
</div>
@endsection