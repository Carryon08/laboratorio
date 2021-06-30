@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary">Resultados de usuario</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (Auth::user()->user_type_id == 1)
                    <a class="btn btn-success btn-elevate btn-circle btn-icon float-right" title="Añadir archivo"
                       href="{{ route('files.create', $id)}}">
                        Añadir resultados
                    </a>
                    @endif
                    <br><br>
                    <table class="table table-primary">
                        <thead>
                        <tr class="d-flex">
                            <th class="col-6">Tipo de resultado</th>
                            <th class="col-6">Opciones</th>
                        </tr>
                        </thead>
                        @foreach($UserFiles as $file)
                        <tbody>
                        <tr class="d-flex">
                            <td class="col-6">{{$file->description}}</td>
                            <td class="col-6">
                                <div class="row">
                                    @if (Auth::user()->user_type_id == 1)
                                    <a class="btn btn-primary btn-elevate btn-circle btn-icon" title="Ver"
                                       href="{{route('file.show',$file->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    &nbsp;
                                    <a class="btn btn-warning btn-circle btn-icon" title="Descargar"
                                       href="{{route('files.download',$file->name)}}">
                                        <i class="fa fa-download"></i>
                                    </a>
                                    &nbsp;
                                    <form method="post" action="{{route('file.destroy', $file->id) }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle btn-icon"
                                                title="Borrar">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    &nbsp;@else
                                    <a class="btn btn-primary btn-elevate btn-circle btn-icon" title="Ver"
                                       href="{{route('file.show',$file->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    &nbsp;
                                    <a class="btn btn-warning btn-circle btn-icon" title="Descargar"
                                       href="{{route('files.download',$file->name)}}">
                                        <i class="fa fa-download"></i>
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
