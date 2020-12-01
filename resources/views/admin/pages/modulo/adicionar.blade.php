@extends('admin.layouts.app')

@section('title', 'GWI - Adicionar Módulo')

@section('content')

    <div class="container-fluid">
        <h3><strong>Adicionar Módulo</strong></h3>
        <hr>
        <form class="full-form" action="{{ route('modulo.store') }}" method="POST" enctype="multipart/form-data" role="">
            @csrf
            @include('admin.includes.alerts')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="nav-icon fas fa-info-circle"></i>
                                Novo Módulo
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nome do módulo</label>
                                <input class="form-control" type="text" name="modulo" value="{{ old('modulo') }}">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Adicionar Módulo</button>
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
