@extends('admin.layouts.app')

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
                        <h3 class="card-title">Informações da notícia</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Chapéu</label>
                            <input class="form-control" type="text" name="chapeu" value="{{ old('chapeu') }}"
                                placeholder="chapeu">
                        </div>
                        <div class="form-group">
                            <label>Setor</label>
                            <input class="form-control" type="text" name="setor" value="{{ old('setor') }}"
                                placeholder="setor">
                        </div>
                        <div class="form-group">
                            <label>Editoria</label>
                            <select class="form-control" name="editoria">
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
                        <h3 class="card-title">Agendar Publicação</h3>
                    </div>

                    <div class="card-body">
                        <label>Data Inicial</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" autocomplete="off" name="data_inicial" value="{{ old('data_inicial') }}"
                                class="form-control" id="reservationtime">
                        </div>
                    </div>
                    <div class="card-body">
                        <label>Data Final</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <input type="text" autocomplete="off" name="data_final" value="{{ old('data_final') }}"
                                class="form-control" id="reservationtime2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-form">

            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Conteúdo da notícia</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Título Interno</label>
                        <input class="form-control" type="text" name="titulo_interno"
                            value="{{ old('titulo_interno') }}" placeholder="titulo interno">
                    </div>
                    <div class="form-group">
                        <label>Título Capa</label>
                        <input class="form-control" type="text" name="titulo_capa" value="{{ old('titulo_capa') }}"
                            placeholder="titulo capa">
                    </div>
                    <div class="form-group">
                        <label>Subtítulo da Notícia</label>
                        <textarea class="form-control" name="subtitulo" value="{{ old('subtitulo') }}" rows="3"
                            placeholder="subtitulo"></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <textarea class="form-control" name="texto" value="{{ old('texto') }}" id="summary-ckeditor"
                            placeholder="texto"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubmit">Adicionar
                Notícia</button>
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#ModalCancel">Cancelar</button>
        </div>
        <!-- Modal Submit-->
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
        <!--Modal Cancel -->
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
        </div>
    </form>

</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>


@endsection