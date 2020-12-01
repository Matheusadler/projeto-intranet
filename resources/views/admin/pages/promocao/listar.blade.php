@extends('admin.layouts.app')

@section('title', 'GWI - Promoções')

@section('content')
    <div class="container-fluid">
        <h3><strong>Promoções</strong></h3>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h5>
                            <i class="nav-icon fas fa-list-ul"></i>
                            Lista de Promoções Cadastradas
                        </h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Sorteio</th>
                                <th class="text-center">Promoção</th>
                                <th class="text-center">Participantes</th>
                                <th class="text-center">Ganhadores</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($promocoes as $promocao)
                                <tr>
                                    <td class="text-left">{{ $promocao->data_sorteio->format('d/m/Y') }}</td>
                                    <td class="text-center">{{ $promocao->titulo }}</td>
                                    <td class="text-center">{{ $promocao->quantidade }}</td>
                                    <td class="text-center">teste</td>
                                    <td class="text-center">
                                        <table>
                                            <a href="{{ route('promocao.edit', $promocao->id) }}"
                                               class="btn btn-link btn-sm"><i class="nav-icon fas fa-edit"></i></a>

                                            <form action="{{ route('promocao.destroy', $promocao->id) }}" method="POST">
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

<!--    &lt;!&ndash; Modal &ndash;&gt;
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
                <form action="{{ route('promocao.destroy', $promocao->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Desejar realmente exluir esta notícia {{ $promocao->id }}?
                        <input type="hidden" name="promocao_id" id="promocao_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>-->

@endsection
