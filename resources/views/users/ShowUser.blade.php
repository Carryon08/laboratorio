@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold bg-primary">Información del usuario</div>
                <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control " disabled
                               name="name" value="{{ $user->name }}" autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="text" class="form-control " disabled
                               name="email" value="{{ $user->email }}" autocomplete="email" autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{ url('/home') }}">
                            <button class="btn btn-primary">
                                {{ __('Regresar') }}
                            </button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
