@extends('app')
@section('title',"Resta de dos numero")
@section('content')

    <section class="vh-1" style="background-color: #508bfc;">
        <div class="container py-1 h-10">
          <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="{{asset('imagenes/imgoper.png')}}"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <h3 class="mb-5">Operacion Resta</h3>
                  <form action="{{route('resta')}}" method="POST">
                      @csrf  <!-- esto es requerido por seguridad en LARAVLE-->
                        <!-- 
                            ahora para mostrar mensajes en la pagina del formulario
                        -->
                        @if (session('success'))
                            <h6 class="alert alert-success">{{ session('success') }}</h6>
                        @endif

                        @error('Numero1')
                        <h6 class="alert alert-danger">{{ $message }}</h6>
                        @enderror

                        @error('Numero2')
                        <h6 class="alert alert-danger">{{ $message }}</h6>
                        @enderror
                  <div class="form-outline mb-4">
                    <input type="text" name="Numero1"  class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2">Numero 2</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" name="Numero2"  class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX-2">Numero 1</label>
                  </div>
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Restar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection