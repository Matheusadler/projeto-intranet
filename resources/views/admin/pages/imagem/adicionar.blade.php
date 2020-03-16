@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h3><strong>Adicionar Imagem</strong></h3>
    <hr>
    <form class="full-form" action="{{ route('imagem.store') }}" method="POST" enctype="multipart/form-data" role="">
        @csrf
        <div class="full-form">
            <div class="card card-dark">

                <div class="card-header">

                    <h5>
                        <i class="nav-icon fas fa-plus"></i>
                        Adicionar Imagem
                    </h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="form-group">
                            <label for="imagem">Título da Imagem</label>
                            <input class="form-control" type="text" name="titulo" value="{{ old('titulo') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagem" name="imagem">
                                <label class="custom-file-label">Escolha o Arquivo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubmit">Adicionar
                Imagem</button>
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#ModalCancel">Cancelar</button>
        </div>
        <!-- Modal Submit-->
        <div class="modal fade" id="ModalSubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionando Imagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja adicionar esta imagem?
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

@endsection