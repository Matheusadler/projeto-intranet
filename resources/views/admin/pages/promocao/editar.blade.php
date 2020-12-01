@extends('admin.layouts.app')

@section('title', 'GWI - Editar Pormoção')

@section('content')
    <div class="container">
        <form class="full-form" action="{{ route('promocao.update', $promocoes->id) }}" method="POST"
              enctype="multipart/form-data" role="">
            @method('PUT')
            @csrf
            <div class="col-sm-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="nav-icon fas fa-plus"></i>
                            Editar Promoção
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Site</label>
                            <input class="form-control" type="text" name="" value="Intranet" disabled>
                        </div>
                        <div class="form-group">
                            <label>Título</label>
                            <input class="form-control" type="text" name="titulo" value="{{ $promocoes->titulo }}">
                        </div>
                        <div class="form-group">
                            <label>Prêmio</label>
                            <input class="form-control" type="text" name="premio" value="{{ $promocoes->premio }}">
                        </div>
                        <div class="form-group">
                            <label>Quantidade</label>
                            <input class="form-control" type="text" name="quantidade" value="{{ $promocoes->quantidade }}">
                        </div>
                        <div class="form-group">
                            <label>Pergunta</label>
                            <input class="form-control" type="text" name="pergunta" value="{{ $promocoes->pergunta }}">
                        </div>
                        <div class="form-group">
                            <label>Informações</label>
                            <textarea class="form-control" name="info" value="{{ $promocoes->info }}"
                                      rows="3"></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file-upload">
                                <label for="caminho">Imagem</label><br>
                                <input type="file" id="imagem" name="imagem" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file-upload">
                                <label for="caminho">Regulamento</label><br>
                                <input type="file" id="regulamento" name="regulamento" accept=".pdf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group" style="margin-left: 15px; margin-right: 15px;" >
                                <label for="caminho">Inicio da promoção</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    <input type="text" autocomplete="off" name="data_inicio"
                                           value="" class="form-control datas" readonly>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 15px; margin-right: 15px;">
                                <label for="caminho">Final da promoção</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    <input type="text" autocomplete="off" name="data_fim"
                                           value="" class="form-control datas" readonly>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 15px; margin-right: 15px;">
                                <label for="caminho">Data do sorteio</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                    <input type="text" autocomplete="off" name="data_sorteio"
                                           value="" class="form-control datas" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Adicionar Promoção</button>
                <a href="/home" class="btn btn-primary">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>

@endsection
