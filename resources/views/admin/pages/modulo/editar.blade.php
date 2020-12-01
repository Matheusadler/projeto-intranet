@extends('admin.layouts.app')

@section('title', 'GWI - Editar Módulo')

@section('content')
    <div class="container">
        <form class="full-form" action="{{ route('modulo.update', $modulos->id) }}" method="POST"
              enctype="multipart/form-data" role="">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="nav-icon fas fa-info-circle"></i>
                                Editar Módulo
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nome do módulo</label>
                                <input class="form-control" type="text" name="modulo" value="{{ $modulos->modulo }}">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Editar Módulo</button>
                            <a href="/home" class="btn btn-primary">Cancelar</a>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>

@endsection
