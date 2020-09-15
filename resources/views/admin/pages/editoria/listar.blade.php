@extends('admin.layouts.app')

@section('title', 'GWI - Editorias')

@section('content')
<div class="container-fluid">
    <h3><strong>Editorias</strong></h3>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h5>
                        <i class="nav-icon fas fa-list-ul"></i>
                        Lista de Editoria Cadastradas
                    </h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Editoria</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Editoria Pai</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($editorias as $editoria)
                            <tr>
                                <td class="text-left">{{ $editoria->nome }}</td>
                                <td class="text-center" id="slug">{{ $editoria->slug }}</td>
                                <td class="text-center">{{ $editoria->editoria_pai }}</td>
                                <td class="text-center">
                                    <table>
                                        <a href="{{ route('editoria.edit', $editoria->id) }}"
                                            class="btn btn-link btn-sm"><i class="nav-icon fas fa-edit"></i></a>
                                        <form action="{{ route('editoria.destroy', $editoria->id) }}" method="POST">
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