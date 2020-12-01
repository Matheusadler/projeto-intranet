@extends('admin.layouts.app')

@section('title', 'GWI - Módulos')

@section('content')
    <div class="container-fluid">
        <h3><strong>Módulos</strong></h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h5>
                            <i class="nav-icon fas fa-list-ul"></i>
                            Lista de Módulos Cadastrados
                        </h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Cód.</th>
                                <th class="text-center">Módulo</th>
                                <th class="text-center">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($modulos as $modulo)
                                <tr>
                                    <td class="text-left">{{ $modulo->id }}</td>
                                    <td class="text-left">{{ $modulo->modulo }}</td>
                                    <td class="text-center">
                                        <table>
                                            <a href="{{ route('modulo.edit', $modulo->id) }}"
                                               class="btn btn-link btn-sm"><i class="nav-icon fas fa-edit"></i></a>

                                            <form action="{{ route('modulo.destroy', $modulo->id) }}" method="POST">
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
