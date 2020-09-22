@extends('admin.layouts.app')

@section('title', 'GWI - Notícias')

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
                        Lista de Notícias Cadastradas
                    </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Título da Notícia</th>
                                <th class="text-center">Data de Publicação</th>
                                <th class="text-center">Criado por</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($noticias as $noticia)
                            <tr>
                                <td class="text-left">{{ $noticia->titulo_interno }}</td>
                                <td class="text-center">{{ $noticia->data_inicial->format('d/m/Y') }}</td>
                                <td class="text-center">{{ $noticia->autor }}</td>
                                <td class="text-center">
                                    <table>
                                        <a href="/#" class="btn btn-link btn-sm"><i
                                                class="nav-icon fas fa-arrows-alt"></i></a>
                                        <a href="{{ route('noticia.edit', $noticia->id) }}"
                                            class="btn btn-link btn-sm"><i class="nav-icon fas fa-edit"></i></a>

                                        <button type="button" class="btn btn-link btn-sm" data-toggle="modal"
                                            data-target="#modal-delete" data-id="{{ $noticia->id }}"><i
                                                class="nav-icon fas fa-trash"></i></button>
                                    </table>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Excluir
                    Notícia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('noticia.destroy', $noticia->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Desejar realmente exluir esta notícia?
                    <input type="hidden" name="noticia_id" id="noticia_id" value="">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection