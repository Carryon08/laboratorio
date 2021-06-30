@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-header font-weight-bold bg-primary">Añadir resultados</div>
            <form method="post" action="{{ route('file.store')}}" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Descripción') }}</label>

                    <div class="col-md-3">
                        <input id="description" type="text" class="form-control " required
                               name="description" value="{{ old('description') }}" autocomplete="description" autofocus>
                    </div>
                    <label for="file" class="col-md-2 col-form-label text-md-right">{{ __('Resultados') }}</label>

                    <div class="col-md-3">
                        <input id="name" type="file" class="form-control" required
                               name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                    </div>
                </div>
                <input id="id" type="text" class="form-control " required
                       name="id" value="{{$id}}" hidden autofocus>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-success">
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </div>
            </form>
            <a href="{{ route('files.index', $id) }}">
                <button class="btn btn-primary">
                    {{ __('Regresar') }}
                </button>
            </a>
        </div>
    </div>
</div>
</div>

@endsection
