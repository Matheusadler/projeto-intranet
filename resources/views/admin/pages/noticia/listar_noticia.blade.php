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
                                <th>chapeu</th>
                                <th>autor</th>
                                <th>interno</th>
                                <th>capa</th>
                                <th>subtitulo</th>
                                <th>texto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($noticias as $noticia)
                            <tr>
                                <td>{{ $noticia->chapeu }}</td>
                                <td>{{ $noticia->autor }}</td>
                                <td>{{ $noticia->titulo_interno }}</td>
                                <td>{{ $noticia->subtitulo }}</td>
                                <td>{{ $noticia->texto }}</td>

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