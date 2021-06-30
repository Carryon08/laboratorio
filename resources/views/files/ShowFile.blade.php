@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-header font-weight-bold bg-primary">Ver resultados</div>
            <br><br>
            <h3>{{$file->description}}</h3>
            <p>
                <iframe width="100%" height="1000" src="{{asset('storage/'.$file->name)}}"></iframe>
            </p>
            <a href="{{ route('files.index', $file->user_id) }}">
                <button class="btn btn-primary">
                    {{ __('Regresar') }}
                </button>
            </a>
        </div>
    </div>
</div>
</div>

@endsection
