@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    @if (Auth::user()->state == "AC")
    <div class="row justify-content-center my-3">
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Menu de opciones!
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <h6 class="dropdown-header">Elija alguna opcion</h6>
              <a class="dropdown-item" href="/users">Usuarios</a>
              <a class="dropdown-item" href="/catalogues">Catalogos</a>
              <a class="dropdown-item" href="/products">Productos</a>
            </div>
        </div>
    </div>
    @else
        User Inactive, sorry! please, say with a admin for you actived. Thanks!
    @endif
    
    
</div>
@endsection
