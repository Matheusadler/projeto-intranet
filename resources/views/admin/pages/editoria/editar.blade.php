@extends('admin.layouts.app')

@section('title', 'GWI - Editar Editorias')

@section('content')
<div class="container">
    <form action="{{ route('editoria.update', $editorias->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="full-form">
            <div class="card card-dark">

                <div class="card-header">

                    <h5>
                        <i class="nav-icon fas fa-plus"></i>
                        Editar Editoria
                    </h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="form-group">
                            <label>Editoria</label>
                            <input class="form-control" id="editoria" type="text" name="nome"
                                value="{{ $editorias->nome }}">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input class="form-control" id="slug" type="text" name="slug" value="{{ $editorias->slug }}"
                                readonly=“true”>
                        </div>
                        <div class="form-group">
                            <label>Editoria Pai</label>
                            <select class="form-control" name="editoria">
                                <option value="" disabled selected>Selecione uma Editoria</option>
                                @foreach ($editorias_list as $editoria)
                                <option value="{{ $editoria->nome }}">{{ $editoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Editar Editoria</button>
            <a href="{{ route('editoria.index') }}" class="btn btn-primary">Cancelar</a>
        </div>
    </form>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

@endsection