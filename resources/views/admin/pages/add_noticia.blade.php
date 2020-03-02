@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <h2>Adicionar Notícia</h2>
    <hr>
    <div class="row">
        <!-- Main content -->
        <div class="col-sm-6">
            <div class="news">


                <!-- /.card -->
                <!-- general form elements disabled -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Informações de localização</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form">

                            <!-- select -->
                            <div class="form-group span">
                                <label>Site</label>
                                <select class="form-control">
                                    <option>Intranet</option>
                                </select>
                            </div>
                            <!-- select -->
                            <div class="form-group">
                                <label>Editoria</label>
                                <select class="form-control">
                                    <option>Teste1</option>
                                    <option>Teste2</option>
                                    <option>Teste3</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <!-- /.content -->
        <div class="col-sm-6">
            <div class="news">


                <!-- /.card -->
                <!-- general form elements disabled -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Informações da notícia</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form">

                            <!-- select -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Chapéu</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Fonte/Autor</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="col-sm-6">
            <div class="news">


                <!-- /.card -->
                <!-- general form elements disabled -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Informações da notícia</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form">

                            <!-- select -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Título Interno (min. 6 caracteres)</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Título de Capa</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Título Pequeno</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Subtítulo Reduzido (uma linha)</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subtítulo da notícia</label>
                                <textarea class="form-control" rows="3" placeholder=""></textarea>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>

</div>
@endsection