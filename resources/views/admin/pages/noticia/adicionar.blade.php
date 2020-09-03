@extends('admin.layouts.app')

@section('title', 'GWI - Adicionar Notícias')

@section('content')

<div class="container-fluid">
    <h3><strong>Adicionar Notícia</strong></h3>
    <hr>

    <form class="full-form" action="{{ route('noticia.store') }}" method="POST" enctype="multipart/form-data" role="">
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
                            <input class="form-control" type="text" name="chapeu" value="{{ old('chapeu') }}">
                        </div>
                        <div class="form-group">
                            <label>Setor</label>
                            <input class="form-control" type="text" name="setor" value="{{ old('setor') }}">
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
                                <option value="{{ $imagem->id }}">{{ $imagem->titulo }}</option>
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
                        <label>Data</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" autocomplete="off" name="data_inicial" value="{{ old('data_inicial') }}"
                                class="form-control datas">
                        </div>
                    </div>
                </div>
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-plus-square"></i>
                            Criado Por
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" autocomplete="off" name="autor" value="{{ Auth::user()->name }}"
                                class="form-control datas" disabled>
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
                            value="{{ old('titulo_interno') }}">
                    </div>
                    <div class="form-group">
                        <label>Título Capa</label>
                        <input class="form-control" type="text" name="titulo_capa" value="{{ old('titulo_capa') }}">
                    </div>
                    <div class="form-group">
                        <label>Subtítulo da Notícia</label>
                        <textarea class="form-control" name="subtitulo" value="{{ old('subtitulo') }}"
                            rows="3"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Corpo da Notícia</label>
                        <textarea class="form-control" name="texto" value="{{ old('texto') }}" id="summary-ckeditor"
                            placeholder="texto"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Adicionar Notícia</button>
            <a href="/home" class="btn btn-primary">Cancelar</a>
        </div>
        <!-- Modal Submit
        <div class="modal fade" id="ModalSubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionando Notícia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja adicionar esta notícia?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </div>
            </div>
        </div>
        Modal Cancel 
        <div class="modal fade" id="ModalCancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cancelando Operação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja cancelar esta operação?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Quero
                            continuar</button>
                        <a href="/home" type="button" class="btn btn-primary swalDefaultSuccess">Sim</a>
                    </div>
                </div>
            </div>
        </div>-->
    </form>

</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>


@endsection