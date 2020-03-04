@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h3><strong>Notícias</strong></h3>
    <hr>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Notícias Cadastradas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Info</th>
                                <th>Site</th>
                                <th class=" col-sm-4">Título da Notícia</th>
                                <th>Data da Publicação</th>
                                <th>Criada por</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <i class="nav-icon fas fa-camera"></i>
                                </td>
                                <td>Intranet</td>
                                <td>Teste 1</td>
                                <td>dd/mm/aaaa</td>
                                <td>Adler</td>
                                <td>
                                    <a href="/capa"><i class="nav-icon fas fa-arrows-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="nav-icon fas fa-camera"></i>
                                </td>
                                <td>Intranet</td>
                                <td>Teste 2</td>
                                <td>dd/mm/aaaa</td>
                                <td>Adler</td>
                                <td>ação</td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="nav-icon fas fa-camera"></i>
                                </td>
                                <td>Intranet</td>
                                <td>Teste 3</td>
                                <td>dd/mm/aaaa</td>
                                <td>Adler</td>
                                <td>ação</td>
                            </tr>
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