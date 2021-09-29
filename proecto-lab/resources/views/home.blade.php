@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>        
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            
                            {{ session('status') }}    
                            
                            
                        </div>
                    @endif

                    {{ __('Bienvenido!') }} 
                    <br>
                    {{ auth()->user()->name }} <!-- Aqui obtenemos los datos del usuario -->
                    <br>
                    @can('Ver Boton Pagina') <!-- Iniciamos la verificación del permiso 'Ver Boton Pagina' -->
                    <button>
                        Ver Pagina
                    </button>    <!-- Fin de la verificación -->
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
