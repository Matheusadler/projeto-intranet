@extends('admin.layouts.app')

@section('title', 'GWI - Adicionar Editorias')

@section('content')
<div class="container-fluid">
    <h3><strong>Adicionar Editoria</strong></h3>
    <hr>
    <form class="full-form" action="{{ route('editoria.store') }}" method="POST" enctype="multipart/form-data"
        onsubmit="return checkForm(this);">
        @csrf
        <div class="full-form">
            <div class="card card-dark">

                <div class="card-header">

                    <h5>
                        <i class="nav-icon fas fa-plus"></i>
                        Adicionar Editoria
                    </h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="form-group">
                            <label>Editoria</label>
                            <input class="form-control" id="editoria" type="text" name="nome" value="{{ old('nome') }}">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input class="form-control" id="slug" type="text" name="slug" value="{{ old('slug') }}"
                                readonly=“true”>
                        </div>
                        <div class="form-group">
                            <label>Editoria Pai</label>
                            <select class="form-control" name="editoria">
                                <option value="" disabled selected>Selecione uma Editoria</option>
                                @foreach ($editorias as $editoria)
                                <option value="{{ $editoria->nome }}">{{ $editoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary">Adicionar Editoria</button>
            <button type="button" class="btn btn-primary">Cancelar</button>
        </div>

    </form>

</div>

<script>
    function checkForm(form)
    {    
    form.myButton.disabled = true;
    return true;
    }
</script>

@endsection