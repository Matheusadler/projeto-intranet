@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <h3><strong>Adicionar Notícia</strong></h3>
    <hr>
    <form action="{{ route('noticia.store') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="descricao">
        <button type="submit">Enviar</button>
    </form>

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
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
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
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Quero continuar</button>
                    <a href="/home" type="button" class="btn btn-primary swalDefaultSuccess">Sim</a>
                </div>
            </div>
        </div>
    </div>-->
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>


@endsection