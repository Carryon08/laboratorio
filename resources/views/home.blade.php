@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-primary">
                        <thead>
                            <tr class="d-flex">
                                <th class="col-4">Nombre</th>
                                <th class="col-4">Correo</th>
                                <th class="col-4">Opciones</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                        <tr class="d-flex">
                            <td class="col-4">{{$user->name}}</td>
                            <td class="col-4">{{$user->email}}</td>
                            <td class="col-4">
                                <div class="row">
                                    @if (Auth::user()->user_type_id == 1)
                                    <a class="btn btn-primary btn-elevate btn-circle btn-icon" title="Ver"
                                       href="{{ route('user.show', $user->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    &nbsp;
                                    <a class="btn btn-warning btn-circle btn-icon" title="Editar"
                                       href="{{ route('user.edit', $user->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    &nbsp;
                                    <form method="post" action="{{ route('user.destroy', $user->id) }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle btn-icon"
                                                title="Borrar">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a class="btn btn-secondary btn-circle btn-icon" title="Resultados"
                                       href="{{ route('files.index', $user->id) }}">
                                        <i class="fa fa-id-card"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-secondary btn-circle btn-icon" title="Resultados"
                                       href="{{ route('files.index', $user->id) }}">
                                        <i class="fa fa-id-card"></i>
                                    </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
