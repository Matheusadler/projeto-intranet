@extends('admin.layouts.app')

@section('title', 'GWI - Imagens')

@section('content')
<div class="container-fluid">
    <h3><strong>Banco de Imagens</strong></h3>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" name="filtro" type="search" placeholder="Filtar por Título"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
                    <button class="btn btn-outline-info my-2 my-sm-0" style="margin-left: 5px;"
                        type="submit">Limpar</button>
                </form>
            </div>
            <div class="card card-dark">
                <div class="card-header">
                    <h5>
                        <i class="nav-icon fas fa-list-ul"></i>
                        Lista de Imagens Cadastradas
                    </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body content-center">
                    @foreach ($imagens as $imagem)

                    <a href="{{ $imagem->caminho }}" data-lightbox="imagem-exemplo" data-title="{{ $imagem->titulo }}">
                        <img src="{{ $imagem->caminho }}" alt="" class="img-list border border-dark">
                    </a>
                    @endforeach
                    <hr>
                    {{ $imagens->links('admin.layouts.paginate') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection