@extends('admin.layouts.app')

@section('title', 'GWI - Listar Notícias')

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
                                        <form action="{{ route('noticia.destroy', $noticia->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link btn-sm"><i
                                                    class="nav-icon fas fa-trash"></i></button>
                                        </form>
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

@endsection