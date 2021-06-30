@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header font-weight-bold ">Información del usuario</div>
                <div class="col-md-10">
                <form method="post" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-3">
                            <input id="name" type="text" class="form-control "
                                   name="name" value="{{ $user->name }}" autocomplete="name" autofocus>
                        </div>
                        <label for="price" class="col-md-3 col-form-label text-md-right">{{ __('Correo') }}</label>

                        <div class="col-md-3">
                            <input id="email" type="text" class="form-control "
                                   name="email" value="{{ $user->email }}" autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i> Guardar
                            </button>
                        </div>
                    </div>

                </form>
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
