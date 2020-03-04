@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <h3><strong>Adicionar Notícia</strong></h3>
    <hr>
    <div class="row">
        <!-- Main content -->
        <div class="col-sm-8">
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
        <div class="col-sm-4">
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
        <div class="col-sm-8">
            <div class="news">


                <!-- /.card -->
                <!-- general form elements disabled -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Conteúdo da notícia</h3>
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
                            <hr>
                            <div class="form-group">
                                <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
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
        <div class="col-sm-4">
            <div class="news">


                <!-- /.card -->
                <!-- general form elements disabled -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Mídia</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile" class="text-danger">Foto Horizontal 720x413</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="text-danger">Foto Quadrada 413x413</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Legenda</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Vídeo</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Áudio</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Código da Galeria</label>
                                <label class="float-none text-danger text-sm">(Busca: digite o título da
                                    galeria)</label>
                                <input type="text" class="form-control" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Agendar Publicação</h3>
                    </div>
                    <div class="card-body">
                        <!-- Date range -->
                        <div class="form-group">
                            <label>Data/Hora (Inicial)</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservationtime">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Data/Hora (Final)</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservationtime">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Buscas</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubmit">Adicionar
            Notícia</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalCancel">Cancelar</button>
    </div>

    <!-- Modal Submit-->
    <div class="modal fade" id="ModalSubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionando Notícia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja adicionar esta notícia?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cancel-->
    <div class="modal fade" id="ModalCancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cancelando Operação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja cancelar esta operação?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Quero continuar</button>
                    <a href="/home" type="button" class="btn btn-primary swalDefaultSuccess">Sim</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>

@endsection