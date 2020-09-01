@extends('admin.layouts.app')

@section('title', 'GWI - Editar Notícias')

@section('content')
<div class="container">
    <form action="{{ route('noticia.update', $noticias->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-sm-8">

                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="nav-icon fas fa-info-circle"></i>
                            Informações da Notícia
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Chapéu</label>
                            <input class="form-control" type="text" name="chapeu" value="{{ $noticias->chapeu }}">
                        </div>
                        <div class="form-group">
                            <label>Setor</label>
                            <input class="form-control" type="text" name="setor" value="{{ $noticias->setor }}">
                        </div>
                        <div class="form-group">
                            <label>Editoria</label>
                            <select class="form-control" name="editoria">
                                <option value="" disabled selected>Selecione uma Editoria</option>
                                @foreach ($editorias as $editoria)
                                <option value="{{ $editoria->id }}">{{ $editoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Imagem</label>
                            <select class="form-control" name="imagem">
                                @foreach ($imagens as $imagem)
                                <option value="{{ $imagem->id }}">{{ $imagem->caminho }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            Agendar Publicação
                        </h3>
                    </div>

                    <div class="card-body">
                        <label>Data Inicial</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" autocomplete="off" name="data_inicial" value="{{ old('data_inicial') }}"
                                class="form-control datas">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-form">

            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="nav-icon fas fa-keyboard"></i>
                        Conteúdo da notícia
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Título Interno</label>
                        <input class="form-control" type="text" name="titulo_interno"
                            value="{{ $noticias->titulo_interno }}">
                    </div>
                    <div class="form-group">
                        <label>Título Capa</label>
                        <input class="form-control" type="text" name="titulo_capa" value="{{ $noticias->titulo_capa }}">
                    </div>
                    <div class="form-group">
                        <label>Subtítulo da Notícia</label>
                        <textarea class="form-control" name="subtitulo" value="{{ $noticias->subtitulo }}"
                            rows="3"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Corpo da Notícia</label>
                        <textarea class="form-control" name="texto" value="{{ $noticias->texto }}" id="summary-ckeditor"
                            placeholder="texto"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Adicionar Notícia</button>
            <a href="{{ route('noticia.index') }}" class="btn btn-primary">Cancelar</a>
        </div>
    </form>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

@endsection