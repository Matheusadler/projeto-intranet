@extends('admin.layouts.app')

@section('title', 'GWI - Promoções')

@section('content')
    <div class="container-fluid">
        <h3><strong>Operações</strong></h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h5>
                            <i class="nav-icon fas fa-list-ul"></i>
                            Lista de Operações Cadastradas
                        </h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Cód.</th>
                                <th class="text-center">Operação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($operacoes as $operacao)
                                <tr>
                                    <td class="text-left">{{ $operacao->id }}</td>
                                    <td class="text-left">{{ $operacao->operacao }}</td>
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
