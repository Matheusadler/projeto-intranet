@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h3><strong>Notícias</strong></h3>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h5>
                        <i class="nav-icon fas fa-list-ul"></i>
                        Lista de Imagens Cadastradas
                    </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @foreach ($imagens as $imagem)
                    <img src="{{ $imagem->caminho }}" alt="" class="img-list border border-dark">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection